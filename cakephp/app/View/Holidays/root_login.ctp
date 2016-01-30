<div class="container">
  <div class="row">

    <?php
      echo $this->Session->flash();
    ?>

    <h1>ログイン</h1>

    <div class="login-form">
      <?php
        echo $this->Form->create('Admin');
        echo $this->Form->input('email', array('label' => 'メールアドレス', 'class' => 'form-control', 'div' => 'form-group'));
        echo $this->Form->input('password', array('label' => 'パスワード', 'class' => 'form-control', 'div' => 'form-group' ));
        echo $this->Form->end(array('label' => 'ログイン', 'class' => 'btn btn-primary', 'div' => 'form-group'));
      ?>
    </div>

    <hr>

    <a href="/root_list" class="btn btn-primary" style="margin-bottom: 10px">ログイン処理を省略</a>
    <p>※デモ版の為の機能です</p>
  </div>
</div>
