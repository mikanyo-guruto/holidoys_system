<html>
	<head>
		<title>公欠登録画面</title>
		<link rel="stylesheet" href="/holidoys_system/cakephp/css/bootstrap.min.css">
		<link rel="stylesheet" href="/holidoys_system/cakephp/css/style.css">
	</head>
	
	<body>

		<div class="container">
			<h1>登録フォーム</h1>

			<div class="holiday-forms">
				<div class="form-horizontal">
					<div class="form-inline form-group">
						<label for="name" class="control-label ">氏名</label>
	                	<input id="name" type="text" class="form-control name"/>
					</div>

					<div class="form-inline form-group">
						<label for="student-number" class="control-label">学籍番号</label>
	                    <input id="student-number" type="text" class="form-control number"/>
					</div>

					<div class="form-inline form-group">
					<label for="school-year" class="control-label">学年</label>
	                    <select id="school-year" class="form-control year" />
	                    	<option value="1">1年</option>
	                   		<option value="2">2年</option>
	                   		<option value="3">3年</option>
	                   		<option value="4">4年</option>
	                   	</select>
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
					    		<li><label><input type="radio" name="game" value="">スーパーゲームクリエイター専攻</label></li>
					    		<li><label><input type="radio" name="game" value="">ゲーム企画・シナリオ専攻</label></li>
								<li><label><input type="radio" name="game" value="">ゲームプログラマー専攻</label></li>
								<li><label><input type="radio" name="game" value="">ゲームキャラクター・グラフィック専攻</label></li>
								<li><label><input type="radio" name="game" value="">アプリゲーム専攻</label></li>
								<li><label><input type="radio" name="game" value="">ゲームCGデザイン専攻</label></li>
							</ul>
						</div>

						<div class="tab-pane fade" id="tab2">
					    	<ul class="major">
								<li><label><input type="radio" name="creator" value="">クリエイティブデザイン専攻</label></li>
								<li><label><input type="radio" name="creator" value="">3DCG専攻</label></li>
								<li><label><input type="radio" name="creator" value="">総合アニメーション専攻</label></li>
								<li><label><input type="radio" name="creator" value="">マンガデザイナー専攻</label></li>
								<li><label><input type="radio" name="creator" value="">コミックイラスト専攻</label></li>
								<li><label><input type="radio" name="creator" value="">メディアクリエイター専攻</label></li>
							</ul>
						</div>

						<div class="tab-pane fade" id="tab3">
							<ul class="major">
								<li><label><input type="radio" name="product" value="">コミュニケーションロボットAI専攻</label></li>
								<li><label><input type="radio" name="product" value="">メカトロニクスエンジニア専攻</label></li>
								<li><label><input type="radio" name="product" value="">次世代プロダクトデザイン専攻</label></li>
								<li><label><input type="radio" name="product" value="">ライト&イルミネーションデザイン専攻</label></li>
							</ul>
						</div>

						<div class="tab-pane fade" id="tab4">
							<ul class="major">
								<li><label><input type="radio" name="it" value="">スーパーITエンジニア専攻</label></li>
								<li><label><input type="radio" name="it" value="">プログラマー専攻</label></li>
								<li><label><input type="radio" name="it" value="">ゲーム・IT専攻</label></li>
								<li><label><input type="radio" name="it" value="">Web・アプリクリエイター専攻</label></li>
							</ul>
						</div>

					</div>
				</div>

				<div class="form-horizontal">
					<div class="form-inline form-group">
						<label for="holidays" class="control-label">公欠日</label>
	                	<input id="holiday" type="text" class="form-control holidays" />
	            		<span class="control-label">月</span>
	       				<input id="day" type="text" class="form-control holidays" />
	               		<span class="control-label">日</span>
					</div>

					<div class="form-inline form-group">
						<label for="subject-titles" class="control-label">授業名</label>
	               		<input id="subject-titles" type="text" class="form-control subject-titles"/>
					</div>
				</div>

				<div class="form-group">
					<label for="reason" class="control-label">理由</label>
					<textarea id="reason" class="form-control reason" rows="7" cols="40"></textarea>
				</div>

				<?php
					// モデルの用意
					 echo $this->Form->create('register');

					 echo $this->Form->input('shop_name', array('label' => '支店名'));
					
					 echo $this->Form->end('送信');
				?>
			</div>
		</div>

		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="/holidoys_system/cakephp/js/bootstrap.min.js"></script>
	</body>
</html>