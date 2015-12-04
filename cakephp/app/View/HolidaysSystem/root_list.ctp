<!DOCTYPE html>
<html lang="ja">
<head>
<title></title>
<link rel="stylesheet" href="css/root_list/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div class="main">
	<h1>校欠届け一覧</h1>

	<?php echo $this->Html->link('ログアウト', array('action' => 'index')); ?>

	<div class="container">
		<span class="label label-success">確認済み</span><br>
		<span class="label label-danger">未確認</span>
		<table class="table">
			<thead>
			<tr>
				<th>名前</th>
				<th>公欠日</th>
				<th>公欠授業名</th>
				<th>理由</th>
				<th>詳細</th>
			</tr>
			</thead>
			<tbody>
			<tr class="success">
				<td>石垣慶和</td>
				<td>5月5日</td>
				<td>プログラム授業</td>
				<td>5月5日の3,4限目なんたら先生...</td>
				<td><?php echo $this->Html->link('詳細', array('action' => 'root_detail_satou')); ?></td>
			</tr>
			<tr class="danger">
				<td>佐藤太郎</td>
				<td>5月14日</td>
				<td>デザイン授業</td>
				<td>来週の5/14に企業での面接がある...</td>
				<td><?php echo $this->Html->link('詳細', array('action' => 'root_detail_satou')); ?></td>
			</tr>
			</tbody>
		</table>
	</div>

	<div class="text-center">
	<ul class="pagination">
			<li class="disabled"><a href="#"><<</a></li>
			<li class="active"><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">>></a></li>
	</ul>
	</div>
</div>
</body>
</html>