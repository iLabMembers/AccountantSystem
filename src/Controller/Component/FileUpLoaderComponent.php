<?php namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
use RuntimeException;
// Formのcreateの際に['enctype'=>'multipart/form-data'] を引数に加えること。
class FileUpLoaderComponent extends Component{
  public function fileUpload($file = null,$name = 'temp',$dir=null,$limitFileSize=1024*1024){
    try{
      if($dir){
        if(!file_exists($dir)){
	         throw new RuntimeException('指定のディレクトリがありません');
         }
       }else{
	        throw new RuntimeException('ディレクトリの指定がありません');
       }

      if(!isset($file['error']) || is_array($file['error'])){
	       throw new RuntimeException('パラメータが不適切');
       }
	     switch($file['error']){
		       case 0:
		         break;
	        case UPLOAD_ERR_OK:
		         break;
	        case UPLOAD_ERR_NO_FILE :
            throw new RuntimeException('ファイルがありません');
        		break;
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
      if (false === $ext = array_search($fileInfo->mime(),
                                             ['jpg' => 'image/jpeg',
                                              'png' => 'image/png',
                                              'gif' => 'image/gif',
                                              'csv' => 'data/csv'  ]
                                              , true)){
        throw new RuntimeException('拡張子が適切ではありません');
      }

           // ファイル名の生成
            $uploadFile = $name . "." . $ext;
           // $uploadFile = sha1_file($file["tmp_name"]) . "." . $ext;

           // ファイルの移動
           if (!@move_uploaded_file($file["tmp_name"], $dir . "/" . $uploadFile)){
               throw new RuntimeException('Failed to move uploaded file.');
           }

           // 処理を抜けたら正常終了
//            echo 'File is uploaded successfully.';

       } catch (RuntimeException $e) {
           throw $e;
       }
       return $uploadFile;
   }
}
?>
