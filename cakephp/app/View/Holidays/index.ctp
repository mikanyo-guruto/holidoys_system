<html>
<head>
    <title></title>
    <?php
    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('style');
    ?>
</head>

<body>

<div class="container">
    <div class="row">
        <div class="signin_btn clearfix">
            <?php echo $this->Html->link('管理者ログイン', array('action' => 'root_login')); ?>
        </div>

        <?php echo $this->Session->flash(); ?>

        <div class="information">
            <h1>公欠届け提出サイト</h1>
            <?php echo $this->Html->link('公欠届を出す', array('action' => 'register'), array('class' => 'btn btn-primary')); ?>
        </div>
    </div>
</div>

</body>
</html>