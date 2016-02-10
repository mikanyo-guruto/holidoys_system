<div class="container">
  <div class="row">

    <?php
      echo $this->Session->flash();
    ?>

    <div class="information-box clearfix">

      <div class="information-box-left-content">
        <h1>TECH.C. 公欠届管理システム</h1>

        <p id="now-time">現在時刻</p>
      </div>

      <?php
        echo $this->Html->link(
          '<div class="information-box-right-content">
          <span>提出する</span>
          </div>', 
          array('action' => 'register'),
          array('escape' => false)
        );
      ?>
    </div>
    <div class="row">
      <div class="members">
        <h2>プロジェクトメンバー</h2>
        <ul>
          <li><span class="members-title">プログラマー</span></li>
          <li><span class="members-major">プログラマー専攻 2年</span> 石垣 慶和</li>
          <li><span class="members-major">スーパーITエンジニア専攻 2年</span> 三浦 桂輔</li>
          <li><span class="members-title">マネージャー</span></li>
          <li><span class="members-major">スーパーITエンジニア専攻 4年</span> 中西 政浩</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php $this->Html->scriptStart(array('inline' => false)); ?>

welcomeToHawaii();

function welcomeToHawaii() {
nowTime = new Date();
hour = nowTime.getHours();

if(hour <= 9) {
hour = "0" + hour;
}

min = nowTime.getMinutes();

if(min <= 9) {
min = "0" + min;
}

sec = nowTime.getSeconds();
if(sec <= 9) {
sec = "0" + sec;
}
day = nowTime.getDay();
days = ["日","月","火","水","木","金","土"];

document.getElementById("now-time").innerHTML = hour + ":" + min + ":" + sec +"（" +days[day]+ "）";
}

setInterval('welcomeToHawaii()', 1000);

$(window).load(function()
{
  window.setTimeout("$('#flashMessage').fadeOut('slow')", 3000);
});

<?php $this->Html->scriptEnd(); ?>
