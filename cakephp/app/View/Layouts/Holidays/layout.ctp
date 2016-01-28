<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>公欠管理</title>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="">
  <!--&#91;if lt IE 9&#93;>
  <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <!&#91;endif&#93;-->
  <link rel="shortcut icon" href="/img/logo.png">


  <?php
    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('style');
  ?>
</head>

<body>

<div class="main-header">
  <div class="main-header-content">
    <a href="/">
      <img class="main-header-logo" src="/img/logo.png"/>
      <h1>TECH.C</h1>
    </a>
    <div class="signin_btn clearfix">
      <?php echo $this->Html->link('ログイン', array('action' => 'root_login')); ?>
    </div>
  </div>
</div>

<?php echo $this->fetch('content'); ?>

</body>
</html>