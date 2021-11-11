<?php
include 'log.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="src/font/css/all.css" type="text/css" media="all" />
</head>
<body>
    <form name="login" action="" method="post">
         <div class="main">
      <div class="box-login">
        <div class="input">
          <span style="text-align: right;">Login</span>
          <input class="user" type="text" name="username" id="user" placeholder="username.." value="" required=""/>
          <input class="pass" type="password" name="password" id="pass" placeholder="password.." value="" required=""/>
          <input class="sub" type="submit" name="submit" id="in" value="login" />
        </div>
        <div class="right-info">
          <i class="logo fa fa-lock"></i>
           <?php if($_SESSION['username']): ?>
 <?=$_SESSION['username']?>!,</p>
 <a href="?logout=1">Logout</a>
 <?php endif; ?>
        </div>
      </div>
    </div>
    </form>
</body>
</html>
<!--Created :Created 11-11-2021 09:20:44.44

By : dai re

GitHub : [maydei](https://github.com/maidey)

Email :[dairewahandi@gmail.com](mailto:dairewahandi@gmail.com)

Telegram : [@mogionc](https://t.me/mogionc)

Fb [dai re](https://fb.com/deiterada)
-->