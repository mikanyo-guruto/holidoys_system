<div class="container">
  <div class="row">

    <?php echo $this->Session->flash(); ?>

    <div class="information">
      <h1>公欠届け提出サイト</h1>
      <?php echo $this->Html->link('公欠届を出す', array('action' => 'register'), array('class' => 'btn btn-primary')); ?>
    </div>
  </div>
</div>