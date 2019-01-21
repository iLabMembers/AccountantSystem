<?php namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
use RuntimeException;
use SplFileObject;
// Formのcreateの際に['enctype'=>'multipart/form-data'] を引数に加えること。
class FileUpLoaderComponent extends Component{
  public function fileUpload($file = null, $name = 'temp', $dir=WWW_ROOT, $limitFileSize = 1024*1024){
    $this->log($file, LOG_DEBUG);
    $result = null;
    try{
      if($dir){
        if(!file_exists($dir)){
          throw new RuntimeException('指定のディレクトリがありません');
        }
      }else{
        throw new RuntimeException('ディレクトリの指定がありません');
      }
      switch($file['error']){
        case 0:
        break;
        case UPLOAD_ERR_OK:
        break;
        case UPLOAD_ERR_NO_FILE :
        return;
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
        throw new RuntimeException('ファイルサイズ超過');
        break;
        default:
        throw new RuntimeException('未知のエラー');
        break;
      }
      $fileInfo = new File($file['tmp_name']);

      // ファイルタイプのチェックし、拡張子を取得
      // if (false === $ext = array_search($fileInfo->mime(),
      // ['jpg' => 'image/jpeg',
      //  'png' => 'image/png',
      //  'gif' => 'image/gif',
      //  'csv' => 'data/csv'  ]
      //, true)){

      //   $this->log($ext,LOG_DEBUG);
      //   throw new RuntimeException('拡張子が適切ではありません');
      // }
      $ext = strrchr($file['name'], '.');
      $this->log($ext,LOG_DEBUG);
      if($ext == ".csv"){
        $csvData = new SplFileObject($file["tmp_name"]);
        $csvData->setFlags(SplFileObject::READ_CSV);
        $result = array() ;
        foreach ($csvData as $line) {
          if (count($line)>1) {
            $result[] = $line;
          }
        }
        $this->log($result,LOG_DEBUG);
      }else if($ext == ".jpg" || $ext == ".gif" || $ext == ".png"){
        // ファイル名の生成
        $result = $name . ".jpg";
        $this->log($result, LOG_DEBUG);
        // $uploadFile = sha1_file($file["tmp_name"]) . "." . $ext;

        // ファイルの移動
        if (!@move_uploaded_file($file["tmp_name"], $dir . DS . $result)){
          throw new RuntimeException('Failed to move uploaded file.');
        }
      }
    } catch (RuntimeException $e) {
      throw $e;
    }
    return $result;
  }
}
?>
