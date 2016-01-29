<div class="container">
  <div class="row">

    <?php
      echo $this->Session->flash();
    ?>

    <div class="information-box clearfix">


      <div class="information-box-left-content">
        <h1>TECH.C 公欠届提出システム</h1>

        <p id="now-time">現在時刻</p>
      </div>

      <a href="/Holidays/register">
        <div class="information-box-right-content">
          <span>提出する</span>
        </div>
      </a>
    </div>
    <div class="row">
      <div class="members">
        <h2>プロジェクトメンバー</h2>
        <ul>
          <li><span>プログラマー</span></li>
          <li>石垣</li>
          <li>三浦</li>
          <li><span>マネージャー</span></li>
          <li>中西</li>
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

<?php $this->Html->scriptEnd(); ?>
