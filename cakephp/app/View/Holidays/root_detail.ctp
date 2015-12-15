<html>
<head>
<title></title>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/root_detail/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div class="main">
	<div class="page-header">
		<h1><small>さんの詳細</small></h1>
	</div>

	<dl class="dl-horizontal detail">
		<dt>学籍番号</dt><dd>00a0000000</dd>
		<dt>学年</dt><dd>4年</dd>
		<dt>専攻</dt><dd>デザイン</dd>
	</dl>
	<br>
	<h2>校欠情報</h2>
	<table class="table table-striped">
		<tr>
			<th>校欠日</th><td>5月14日</td>
		</tr>
		<tr>
			<th>登録日</th><td>5月7日</td>
		</tr>
		<tr>
			<th>校欠授業名</th><td>デザイン授業</td>
		</tr>
		<tr>
			<th>理由</th><td>来週の5/14に企業での面接があるので2限のデザイン授業を校欠をお願いしたいです</td>
		</tr>
		<tr>
			<th>確認状態</th><td class="red">未確認</td>
		</tr>
	</table>
	<!--
	<button type="button" onclick="location.href='root_list.html'" class="btn btn-success">
		<span class="glyphicon glyphicon-ok">この校欠届けを確認する</span>
	</button>
	-->
	<?php echo $this->Html->link('この校欠届けを確認する', array('action' => 'root_list')); ?>
</div>

</body>
</html>