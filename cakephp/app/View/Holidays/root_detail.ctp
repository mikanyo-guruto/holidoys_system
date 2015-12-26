<html>
<head>
<title></title>
<meta charset="UTF-8">
<link rel="stylesheet" href="/test/holidoys_system/cakephp/css/bootstrap.min.css">
</head>
<body>
<div class="main">
    <?php echo $this->Html->link(
        '戻る', 
        array('controller' => 'holidays', 'action' => './root_list'),
        array('class' => 'btn btn-default'))
    ?>
	<div class="page-header">
		<h1><?php echo h($student['Holiday']['student_name']); ?><small>さんの詳細</small></h1>
	</div>

	<dl class="dl-horizontal detail">
		<dt>学籍番号</dt><dd><?php echo h($student['Holiday']['student_number']); ?></dd>
		<dt>学年</dt><dd><?php echo h($student['Holiday']['school_year']); ?></dd>
		<dt>専攻</dt><dd><?php echo h($student['Specialized']['name']); ?></dd>
	</dl>
	<br>
	<h2>校欠情報</h2>
	<table class="table table-striped">
		<tr>
			<th>校欠日</th><td><?php echo h($student['Holiday']['public_holidays']); ?></td>
		</tr>
		<tr>
			<th>登録日</th><td><?php echo h($student['Holiday']['create_time']); ?></td>
		</tr>
		<tr>
			<th>校欠授業名</th><td><?php echo h($student['Tuition']['name']); ?></td>
		</tr>
		<tr>
			<th>理由</th><td><?php echo h($student['Holiday']['reason']); ?></td>
		</tr>
		<tr>
            <th>確認状態</th><td class="red">
				<?php 
                    if(($student['Holiday']['checked']) == false){
                        echo "<font color='red'>未確認</font>";
                    }
                    else{
                        echo "<font color='lime'>確認済み</font>";
                    }
                ?>
			</td>
		</tr>
	</table>
    <?php 
        if(($student['Holiday']['checked']) == false) {
            echo $this->Html->link(
                                    'この公欠届けを確認する',
                                    array('controller' => 'holidays', 'action' => 'check', $student['Holiday']['id']),
                                   array('class' => 'btn btn-primary')
                                  );  
        }
    ?>
</div>

</body>
</html>