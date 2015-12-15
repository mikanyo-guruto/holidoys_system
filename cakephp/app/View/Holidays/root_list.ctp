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
			<tr>
				<th>名前</th>
				<th>公欠日</th>
				<th>公欠授業名</th>
				<th>理由</th>
				<th>詳細</th>
			</tr>
			<?php foreach($students as $date): ?>
			<tr>
				<td><?php echo h($date['Holiday']['student_name']) ?></td>
				<td><?php echo h($date['Holiday']['public_holidays']) ?></td>
				<td><?php echo h($date['Holiday']['tuition_id']) ?></td>
				<td><?php echo h($date['Holiday']['reason']) ?></td>
				<td><?php echo $this->Html->link('編集', array('action' => 'root_detail', $date['Holiday']['id'])); ?></td>
			</tr>
			<?php endforeach; ?>
			<?php unset($students); ?>
		</table>
	</div>

<!--
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
-->
</div>
</body>
</html>