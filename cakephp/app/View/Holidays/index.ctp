<html>
<head>
<title></title>
<link rel="stylesheet" href="/holidoys_system/cakephp/css/style.css">
<link rel="stylesheet" href="/holidoys_system/cakephp/css/bootstrap.min.css">
</head>

<body>

<div class="hoge">
	<div class="text-right">
	<?php echo $this->Html->link('管理者ログイン', array('action' => 'root_list')); ?>
	</div>

	<div class="center">
		<h1>公欠届け提出サイト</h1>
		<p>↓↓↓ここから公欠届けを提出してください。↓↓↓</p>
		<?php echo $this->Html->link('公欠届を出す', array('action' => 'register'), array('class' => 'btn btn-primary') ); ?>
	</div>
</div>

</body>
</html>