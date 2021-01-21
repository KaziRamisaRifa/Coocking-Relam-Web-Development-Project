<?php
include 'connection.php';

if (isset($_POST['log_in'])) {
    // Set variables to represent data from database
    $dbUsname = strip_tags($_POST['username']);
$dbEmail = strip_tags($_POST['email']);
$dbpass = strip_tags($_POST['password']);


    $sql = "SELECT User_Name, Email, Password FROM user";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $UserName= $row["User_Name"];
    $Email= $row["Email"] ;
    $Pass= $row["Password"] ;
    // Check if the username and the password they entered was correct
    if ($UserName == $dbUsname && $Email == $dbEmail && $Pass == $dbpass) {
  header("Location: user_profile.php?id=$UserName");
    } else {
    // Display the alert box
    echo "<script>
  alert('Invalid Input!');
  window.location.href='user_login.php';
  </script>";
}

  }
}

}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-wiidth,initial-scale=1">
    <title>Log In</title>

    <!-- login.css-->
    <link rel="stylesheet" href="CSS/user_login.css">

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
<form id="loginform" method="POST" action="user_login.php" id="" enctype="multipart/form-data"><!--action="the site link"-->
  <!--start header-->
  <h1>LOG IN</h1>

    <!--site link-->
    <!--end site-->

    <div class="input-info">
        <!--the input div containe the information of the user-->
        <i class="fa fa-user"></i>
        <!--user name-->
        <input type="text" name="username" placeholder="User-Name">
        <i class="fa fa-envelope"></i>
        <!--user email-->
        <input type="email" name="email" placeholder="E-mail" required autocomplete="off" validate>
        <i class="fa fa-lock"></i>
        <!--yser password-->
        <input type="password" name="password" placeholder="Password">
        <!--the checkbox to make the browser remember the user-->
        <input type="checkbox">
        <span>Remember Me</span><br>
    </div>

    <div class="log-sign"><!--the login button and the sign up button>[to the sign up page]-->
        <button class="login" name="log_in" form="loginform"><i class="fa fa-mail-forward (alias)"></i> Log In</button><!--log in-->

            <button class="signup" form="signupform"><i class="fa fa-plus"></i><a href="signup.php"> Sign Up</a></button>

    </div><!--end of the log-sign-->

    <div class="social-media"><!--sign up by fb and tw-->
    <button class="btn1"> <i class="fa fa-google"></i> Sign up with google</a>
    </button>

    <button class="btn2"> <i class="fa fa-facebook"></i> Sign up with facebook</a>
    </button>
  </div>

  <p class="forget-password">If you forget your password please <a href="#">click here</a></p>

</form>
</div>

<?php
include 'footer.php';
?>

  </body>
</html>
