<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-wiidth,initial-scale=1">
    <title>Log In</title>

    <!-- login.css-->
    <link rel="stylesheet" href="CSS/admin_login.css">

    <!-- Bootstrap Grid System-->
    <link rel="stylesheet" href="CSS/bootstrap-grid.css">
  </head>
  <body>
    <header>
      <?php include 'header.php';?>
                </header>

                <div class="loginBground">

                <div id='AppendHere'></div>
<!--start login form-->
<form id="loginform" action="#"><!--action="the site link"-->
  <!--start header-->
  <h1>LOG IN</h1>

    <!--site link-->
    <!--end site-->

    <div class="input-info">
        <!--the input div containe the information of the user-->
        <i class="fa fa-user"></i>
        <!--user name-->
        <input type="text" placeholder="Admin Name">
        <i class="fa fa-envelope"></i>
        <!--user email-->
        <input type="email" placeholder="E-mail" required autocomplete="off" validate>
        <i class="fa fa-lock"></i>
        <!--yser password-->
        <input type="password" placeholder="Password">
        <!--the checkbox to make the browser remember the user-->
        <input type="checkbox">
        <span>Remember Me</span><br>
    </div>

    <div class="log-sign"><!--the login button and the sign up button>[to the sign up page]-->
        <button class="login" form="loginform"><i class="fa fa-mail-forward (alias)"></i> Log In</button><!--log in-->



    </div><!--end of the log-sign-->



  <br><br><p class="forget-password">If you forget your password please <a href="#">click here</a></p>

</form>
</div>

<?php
include 'footer.php';
?>

  </body>
</html>
