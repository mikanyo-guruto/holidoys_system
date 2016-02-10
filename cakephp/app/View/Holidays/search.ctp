<?php
	echo $this->Html->css('root/list_style');
?>
<div class="container">
	<div class="row">
		 <?php
      		echo $this->Session->flash();
    	?>
		<h1>校欠届け一覧</h1>

		<div class="info">
			<h2>表示方法：</h2>
			<span>
				<?php 
					echo $this->Html->link('一覧表示', array('action' => 'root_list'), array('class' => 'btn btn-default'));
				?>
			</span>
			<span>
				<?php 
					echo $this->Html->link('確認済み',
											array('action' => 'search',1),
											array('class' => 'btn btn-success')
					);
				?>
			</span>
			<span>
				<?php 
					echo $this->Html->link('未確認',
											array('action' => 'search',0),
											array('class' => 'btn btn-danger')
					);
				?>
			</span>
	    </div>

		<table class="table">
			<tr>
				<th>名前</th>
				<th>公欠日</th>
				<th>公欠授業名</th>
				<th>理由</th>
				<th>詳細</th>
			</tr>
			<?php foreach($students as $date): ?>

			<?php 
                if(h($date['Holiday']['checked'])){
                    echo '<tr class="success">';
                }
                else{
                    echo '<tr class="danger">';
                }
            ?>
				<td><?php echo h($date['Holiday']['student_name']) ?></td>
				<td><?php echo h($date['Holiday']['public_holidays']) ?></td>
				<td><?php echo h($date['Tuition']['name']) ?></td>
				<td><?php echo h($date['Holiday']['reason']) ?></td>
				<td><?php echo $this->Html->link('詳細', array('action' => 'root_detail', $date['Holiday']['id']), array('class' => 'btn btn-info')); ?></td>
			</tr>
			<?php endforeach; ?>
		</table>

        <div class="paginator">
			<?php
				echo $this->Paginator->numbers(array(
					'separator' => '',
					'before' => $this->Paginator->hasPrev() ? $this->Paginator->prev('<<前へ'). '' : '',
        			'after' => $this->Paginator->hasNext() ? ''.$this->Paginator->next('次へ>>') : '',));
			?>
        </div>
	</div>
</div>