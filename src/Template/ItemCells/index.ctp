<!DOCTYPE html>

<html>
<head>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <?=$this->Html->charset() ?>
  <title><?=$this->fetch('title') ?></title>
   <?php echo $this->Html->script('ItemCell');?>
  <?=$this->Html->css('modal')?>
</head>
      <body>
        <div class="box">
          <a data-target="modal1" class="modal-open aaa"><img src="img/cake.icon.png"></a>
          <h1><a data-target="modal1" class="modal-open aaaaaaa">TOPIX1</a></h1>
          <p>sample</p>
        </div>
        <div class="box">ry</div>
        <div class="box">（略）</div>

        <!--Modal contents-->
        <div id="modal1" class="modal-content">
          <h1><?=$title ?></h1>
          <img src="img/cake.icon.png">
          <p>サンプルテキスト。</p>
          <a class="modal-close">×</a>
        </div>
        <div id="modal2" class="modal-content wawa">（略）</div>
        <div id="modal3" class="modal-content aaaaaaaa">（略）</div>
      </body>
        </html>
