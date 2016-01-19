<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
<head>
<title></title>
<?php 
		echo $this->Html->css('bootstrap.min');
?>
</head>
<body>
    <div class="container">
        <h1>管理者ログイン</h1>
        <?php
            echo $this->Form->create('Admin');
            echo $this->Form->input('email', array('label' => 'メールアドレス'));
            echo $this->Form->input('password', array('label' => 'パスワード'));
            echo $this->Form->end('ログイン');
        ?>
    </div>
</body>
</html>