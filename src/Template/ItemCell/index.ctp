<!DOCTYPE html>
<!-- <?php echo $javascript->link('ItemCell'); ?> -->
<html>
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="webroot/js/ItemCell.js"
  <style type="text/css">
  .modal-overlay {
    z-index:2; /*デモではheader,footerをz-index:1にしたので それより上げています*/
    display:none; /*jsでフェードインされるまでdisplay:none*/
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100vh; /*100vhでビューポートの高さいっぱいになります*/
    background-color:rgba(0,0,0,.5)} /*これは好きな色・透明度で*/
    a.modal-open:hover {cursor:pointer} /*カーソルをポインタに*/
    .modal-content {
      position:fixed;
      display:none; /*jsでフェードインされるまでdisplay:none*/
      z-index:3; /*オーバーレイより上に*/
      margin:10px;
      padding:15px;
      border-radius:20px;
      background:#fff}
      .modal-content img {width:auto;max-height:75vh}
      .modal-content h1 {font-size:120%; margin-bottom:0.5em}
      .modal-content p {max-width:565px; text-align:left}
      a.modal-close { /*クローズボタンは何でも好きなスタイルでOK*/
        position:absolute;
        top:0;
        right:10px;
        color:#b29c33;
        font-size:35px;
        line-height:1;
        font-weight:bold;
        text-decoration:none}
        a.modal-close:hover {cursor:pointer} /*カーソルをポインタに*/
        </style>
      </head>
      <body>
        <div class="box">
          <a data-target="modal1" class="modal-open"><img src="img/img1.jpg"></a>
          <h1><a data-target="modal1" class="modal-open">TOPIX1</a></h1>
          <p>テキスト</p>
        </div>
        <div class="box">（略）</div>
        <div class="box">（略）</div>

        <!--Modal contents-->
        <div id="modal1" class="modal-content">
          <h1><?=$title ?></h1>
          <img src="img/img1.jpg">
          <p>サンプルテキスト。</p>
          <a class="modal-close">×</a>
        </div>
        <div id="modal2" class="modal-content">（略）</div>
        <div id="modal3" class="modal-content">（略）</div>
      </body>
      </html>
