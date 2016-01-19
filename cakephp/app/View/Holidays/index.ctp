<html>
<head>
<title></title>
<?php 
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('style');
?>
</head>

<body>

<div class="hoge">
	<div class="text-right">
	<?php echo $this->Html->link('管理者ログイン', array('action' => 'root_login')); ?>
	</div>

	<div class="center">
		<h1>公欠届け提出サイト</h1>
		<p>↓↓↓ここから公欠届けを提出してください。↓↓↓</p>
		<?php echo $this->Html->link('公欠届を出す', array('action' => 'register'), array('class' => 'btn btn-primary') ); ?>
	</div>
</div>

</body>
</html>