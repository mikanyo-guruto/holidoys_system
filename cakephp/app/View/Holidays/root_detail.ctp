<html>
<head>
<title></title>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/root_detail/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div class="main">
    <?php foreach($student as $date): ?>
	<div class="page-header">
		<h1><?php echo h($date['student_name']); ?><small>さんの詳細</small></h1>
	</div>

	<dl class="dl-horizontal detail">
		<dt>学籍番号</dt><dd><?php echo h($date['student_number']); ?></dd>
		<dt>学年</dt><dd><?php echo h($date['school_year']); ?></dd>
		<dt>専攻</dt><dd><?php echo h($date['specialized_id']); ?></dd>
	</dl>
	<br>
	<h2>校欠情報</h2>
	<table class="table table-striped">
		<tr>
			<th>校欠日</th><td><?php echo h($date['public_holidays']); ?></td>
		</tr>
		<tr>
			<th>登録日</th><td><?php echo h($date['create_time']); ?></td>
		</tr>
		<tr>
			<th>校欠授業名</th><td><?php echo h($date['tuition_id']); ?></td>
		</tr>
		<tr>
			<th>理由</th><td><?php echo h($date['reason']); ?></td>
		</tr>
		<tr>
            <th>確認状態</th><td class="red">
				<?php 
                    if(($date['checked']) == false){
                        echo "<font color='red'>未確認</font>";
                    }
                    else{
                        echo "<font color='lime'>確認済み</font>";
                    }
                ?>
			</td>
		</tr>
	</table>
	<?php endforeach; ?>
    <?php 
        if(($date['checked']) == false){
            echo $this->Html->link('この公欠届けを確認する', array(
                    'class' => 'button', 'action' => 'root_list'
                )
            );  
        }
    ?>
	<!--
	<button type="button" onclick="location.href='root_list.html'" class="btn btn-success">
		<span class="glyphicon glyphicon-ok">この校欠届けを確認する</span>
	</button>
	-->
</div>

</body>
</html>