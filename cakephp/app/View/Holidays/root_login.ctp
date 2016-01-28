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
  </div>
</div>
