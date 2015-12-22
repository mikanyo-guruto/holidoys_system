<!DOCTYPE html>
<html lang="ja">
<head>
<title></title>
<link rel="stylesheet" href="/test/holidoys_system/cakephp/css/bootstrap.min.css">
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
				<td><?php echo h($date['Tuition']['name']) ?></td>
				<td><?php echo h($date['Holiday']['reason']) ?></td>
				<td><?php echo $this->Html->link('詳細', array('action' => 'root_detail', $date['Holiday']['id']), array('class' => 'btn btn-info')); ?></td>
			</tr>
			<?php endforeach; ?>

			<?php
				echo $this->Paginator->prev('<<前へ', array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ''));
				echo $this->Paginator->next('次へ>>', array(), null, array('class' => 'next disabled'));
			?>
		</table>
	</div>
</div>
</body>
</html>