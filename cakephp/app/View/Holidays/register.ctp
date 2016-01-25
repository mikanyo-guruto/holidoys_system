<html>
	<head>
		<title>公欠登録画面</title>
		<?php 
			echo $this->Html->css('bootstrap.min');
			echo $this->Html->css('style');
		?>
	</head>
	
	<body>
	<?php echo $this->Form->create('Holiday'); ?>
		<div class="container">
		
			<h1>登録フォーム</h1>

			<div class="holiday-forms">
				<div class="form-horizontal">
					<div class="form-inline form-group">
						<label for="name" class="control-label ">氏名</label>
						<?php
							echo $this->Form->input('student_name', array('label' => false));
						?>
					</div>

					<div class="form-inline form-group">
						<label for="student-number" class="control-label">学籍番号</label>
						<?php
							echo $this->Form->input('student_number', array('label' => false));
						?>
					</div>

					<div class="form-inline form-group">
					<label for="school-year" class="control-label">学年</label>
					<?php
						$options = array(
										'1' => '1年',
										'2' => '2年',
										'3' => '3年',
										'4' => '4年'
										);
						echo $this->Form->select('school_year', $options, array('empty' => '選択してください'));
					?>
					</div>
				</div>

				<div class="form-group">
					<span class="control-label">専攻名</span>
					<!--tab-->
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab1" data-toggle="tab">ゲーム</a></li>
						<li><a href="#tab2" data-toggle="tab">クリエイター</a></li>
						<li><a href="#tab3" data-toggle="tab">ものづくり</a></li>
						<li><a href="#tab4" data-toggle="tab">情報</a></li>
					</ul>
					<!--/tab-->
					<div id="myTabContent" class="tab-content tab">

						<div class="tab-pane fade in active" id="tab1">
							<ul class="major">
							<?php
								$options = array(
												'7' => 'クリエイティブデザイン',
												'8' => '3DCG',
												'9' => '総合アニメーション',
												'10' => 'マンガデザイナー',
												'11' => 'コミックイラスト',
												'12' => 'メディアクリエイター'
											);
								$attributes = array('legend' => false, 'hiddenField' => false);
								echo $this->Form->radio('specialized_id', $options, $attributes);
							?>
							</ul>
						</div>

						<div class="tab-pane fade" id="tab2">
					    	<ul class="major">
					    	<?php
								$options = array(
												'7' => 'クリエイティブデザイン',
												'8' => '3DCG',
												'9' => '総合アニメーション',
												'10' => 'マンガデザイナー',
												'11' => 'コミックイラスト',
												'12' => 'メディアクリエイター'
											);
								$attributes = array('legend' => false, 'hiddenField' => false);
								echo $this->Form->radio('specialized_id', $options, $attributes);
							?>
							</ul>
						</div>

						<div class="tab-pane fade" id="tab3">
							<ul class="major">
							<?php
								$options = array(
												'13' => 'コミュニケーションロボットAI',
												'14' => 'メカトロニクスエンジニア',
												'15' => '次世代プロダクトデザイン',
												'16' => 'ライト&イルミネーションデザイン'
											);
								$attributes = array('legend' => false, 'hiddenField' => false);
								echo $this->Form->radio('specialized_id', $options, $attributes);
							?>
							</ul>
						</div>

						<div class="tab-pane fade" id="tab4">
							<ul class="major">
							<?php
								$options = array(
												'17' => 'スーパーITエンジニア',
												'18' => 'プログラマー',
												'19' => 'ゲーム・IT',
												'20' => 'Web・アプリクリエイター'
											);
								$attributes = array('legend' => false, 'hiddenField' => false);
								echo $this->Form->radio('specialized_id', $options, $attributes);
							?>
							</ul>
						</div>

					</div>
				</div>

				<div class="form-horizontal">
					<div class="form-inline form-group">
						<label for="holidays" class="control-label">公欠日</label>
						<?php
							echo $this->Form->input('month', array('label' => false));
						?>
	            		<span class="control-label">月</span>
	            		<?php
	            			echo $this->Form->input('day', array('label' => false));
	            		?>
	               		<span class="control-label">日</span>
					</div>

					<div class="form-group">
					<span class="control-label">授業名</span>
					<!--タブ-->
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tui1" data-toggle="tab">月曜日</a></li>
						<li><a href="#tui2" data-toggle="tab">火曜日</a></li>
						<li><a href="#tui3" data-toggle="tab">水曜日</a></li>
						<li><a href="#tui4" data-toggle="tab">木曜日</a></li>
                        <li><a href="#tui5" data-toggle="tab">金曜日</a></li>
                        <li><a href="#tui6" data-toggle="tab">土曜日</a></li>
					</ul>
                        
                    
					<!-- / タブ-->
					<div id="myTabContent" class="tab-content tab">
                        <?php foreach($tuition as $key => $data): ?>
                      <div class="tab-pane fade in <?php echo $key === 1 ? 'active':''; ?>" id="tui<?php echo $key ?>">
							<ul class="major">
                                <?php foreach($data as $tui): ?>
					    		<li>
                                    <label>
                                        <?php
                                        	$tuition_day = h($tui['Tuition']['name']);
                                        	$tuition_day_id = h($tui['Tuition']['id']);
                                        	echo $this->Form->radio('tuition_id',
                                        		array(
                                        			$tuition_day_id => $tuition_day
                                        		),
                                        		array(
                                        			'hiddenField' => false
                                        		)
                                        	);
                                        ?>
                                    </label>
                                </li>
                                <?php endforeach; ?>
                            </ul>
						</div>
                        <?php endforeach; ?>
					</div>
				</div>

				<div class="form-group">
					<label for="reason" class="control-label">理由</label>
					<?php
						echo $this->Form->textarea('reason');
					?>
				</div>
			</div>
		</div>
		<?php echo $this->Form->end('送信'); ?>
		
		<?php
			echo $this->Html->script('//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js');
			echo $this->Html->script('bootstrap.min');
		?>
	</body>
</html>