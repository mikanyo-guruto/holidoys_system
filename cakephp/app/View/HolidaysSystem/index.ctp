<html>
<head>
<title></title>
<link rel="stylesheet" href="css/index/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

<div class="hoge">
	<div class="text-right">
	<?php echo $this->Html->link('管理者ログイン', array('action' => 'root_list')); ?>
	</div>

	<div class="center">
		<h1>公欠届け提出サイト</h1>
		<p>↓↓↓ここから公欠届けを提出してください。↓↓↓</p>
		
		<input type="button" onclick="location.href='register.html'" class="btn btn-success" value="公欠届を出す">
	</div>
</div>

</body>
</html>