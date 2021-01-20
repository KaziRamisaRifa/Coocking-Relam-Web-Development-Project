<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="CSS/login_as.css">

    <!-- Bootstrap Grid System-->
    <link rel="stylesheet" href="CSS/bootstrap-grid.css">
  </head>
  <body>
    <header>
      <?php include 'header.php';?>
    </header>

    <div class="loginBground">
      <div class="loginBground__text">
        <h1>Log In</h1>
        <a class="Botton margin__top" href="user_login.php">User</a>
        <a class="Botton margin__top" href="admin_login.php">Admin</a>

      </div>
    </div>
  </body>
</html>
