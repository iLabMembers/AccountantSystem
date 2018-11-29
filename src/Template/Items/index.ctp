<?php $this->extend('../Layout/TwitterBootstrap/dashboard'); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
     <?=$this->Html->charset() ?>
     <title><?=$this->fetch('title') ?></title>
      <?php echo $this->Html->script('ItemCell');?>
     <?=$this->Html->css('modal')?>
  </head>

  <body>
    <div class="row">
      <a data-target="modal1" class="modal-open">
      <div class="col-sm-4">
        <div class="panel panel-warning">
          <div class="panel-heading strong">pizza</div>
            <div class="panel-body text-right"><?php echo $this->Html->image('pizza.jpg',array('width'=>'100%','height'=>'100%')); ?></div>
        </div>
      </div>
      </a>

      <a data-target="modal2" class="modal-open">
      <div class="col-sm-4 modal-open">
        <div class="panel panel-warning">
          <div class="panel-heading strong">pizza</div>
            <div class="panel-body text-right"><?php echo $this->Html->image('pizza.jpg',array('width'=>'100%','height'=>'100%')); ?></div>
        </div>
      </div>
      </a>

      <a data-target="modal3" class="modal-open">
      <div class="col-sm-4 modal-open">
        <div class="panel panel-warning">
          <div class="panel-heading strong">pizza</div>
            <div class="panel-body text-right"><?php echo $this->Html->image('pizza.jpg',array('width'=>'100%','height'=>'100%')); ?></div>
        </div>
      </div>
      </a>

    </div>

    <!--Modal contents-->
    <div id="modal1" class="modal-content">
      <h1>pizza</h1>
      <?php echo $this->Html->image('pizza.jpg',array('width'=>'100%','height'=>'100%')); ?>
      <p>サンプルテキスト。</p>
      <a class="modal-close">×</a>
    </div>

  </body>
</html>

