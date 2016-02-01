<?php echo $this->Form->create('Holiday'); ?>
<div class="container">
  <div class="row">

    <?php
      echo $this->Session->flash();
    ?>
    <h1>公欠届提出フォーム</h1>

    <div class="holiday-forms">
      <div class="form-horizontal">
        <?php
          echo $this->Form->input('student_name', array(
              'label' => '氏名',
              'class' => 'form-control',
              'div' => 'form-inline form-group'));
        ?>

        <?php
          echo $this->Form->input('student_number', array(
              'label' => '学籍番号',
              'class' => 'form-control',
              'div' => 'form-inline form-group'
          ), null);
        ?>

        <?php
          echo $this->Form->input('school_year', array(
              'label' => '学年',
              'class' => 'form-control',
              'div' => 'form-inline form-group',
              'type' => 'select',
              'options' => array(
                  '1年',
                  '2年',
                  '3年',
                  '4年'
              ),
              'class' => 'form-control',
              'empty' => '選択してください'
          ));
        ?>

        <div class="form-group">
          <label class="control-label">専攻名</label>
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab">ゲーム</a></li>
            <li><a href="#tab2" data-toggle="tab">クリエイター</a></li>
            <li><a href="#tab3" data-toggle="tab">ものづくり</a></li>
            <li><a href="#tab4" data-toggle="tab">情報</a></li>
          </ul>
          <div id="myTabContent" class="tab-content tab">
            <div class="tab-pane fade in active" id="tab1">
              <ul class="major">
                <?php
                  $options = array(
                      '1' => 'スーパーゲームクリエイター',
                      '2' => 'ゲーム企画・シナリオ',
                      '3' => 'ゲームプログラマー',
                      '4' => 'ゲームキャラクター・グラフィック',
                      '5' => 'アプリゲーム',
                      '6' => 'ゲームCGデザイン'
                  );
                  $attributes = array('legend' => false, 'separator' => '<br>', 'hiddenField' => false);
                  echo $this->Form->radio('specialized_id', $options, $attributes, array('class' => 'major'));
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
                  $attributes = array('legend' => false, 'separator' => '<br>', 'hiddenField' => false);
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
                  $attributes = array('legend' => false, 'separator' => '<br>', 'hiddenField' => false);
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
                  $attributes = array('legend' => false, 'separator' => '<br>', 'hiddenField' => false);
                  echo $this->Form->radio('specialized_id', $options, $attributes);
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="form-horizontal">
        <div class="form-inline form-group">
          <?php
            echo $this->Form->input('public_holidays', array(
              'label' => '公欠日',
              'type' => 'date',
              'class' => 'form-control',
              'dateFormat' => 'YMD',
              'monthNames' => false,
              'maxYear' => date('Y')+1,
              'minYear' => date('Y'),
              'separator' => array('年', '月', '日'),
              'empty' => '選択してください'
            ));
          ?>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label">授業名</label>
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
          <?php foreach ($tuition as $key => $data): ?>
            <div class="tab-pane fade in <?php echo $key === 1 ? 'active' : ''; ?>" id="tui<?php echo $key ?>">
              <ul class="major">
                <?php foreach ($data as $tui): ?>
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

      <label for="reason" class="control-label">理由</label>

      <div class="form-group">
        <?php
          echo $this->Form->textarea('reason', array(
              'class' => 'form-control reason'
          ));
        ?>
      </div>
    </div>
  </div>
  <?php echo $this->Form->end(array('label' => '提出する', 'class' => 'btn btn-primary', 'div' => 'form-group')); ?>

  <?php
    echo $this->Html->script('//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js');
    echo $this->Html->script('bootstrap.min');
  ?>
  </div>
</div>