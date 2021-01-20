<?php
include 'connection.php';

if (isset($_POST['login'])) {
    // Set variables to represent data from database
    $dbAdname = strip_tags($_POST['adminname']);
$dbEmail = strip_tags($_POST['email']);
$dbpass = strip_tags($_POST['pass']);


    $sql = "SELECT Admin_Name, Email, Password FROM admin";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $AdminName= $row["Admin_Name"];
    $Email= $row["Email"] ;
    $Pass= $row["Password"] ;
    // Check if the username and the password they entered was correct
    if ($AdminName == $dbAdname && $Email == $dbEmail && $Pass == $dbpass) {
  header("Location: admin_profile.php?id=$AdminName");
    } else {
    // Display the alert box
    echo "<script>
  alert('Invalid Input!');
  window.location.href='admin_login.php';
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
<form id="loginform" method="POST" action="admin_login.php" id="" enctype="multipart/form-data"><!--action="the site link"-->
  <!--start header-->
  <h1>LOG IN</h1>

    <!--site link-->
    <!--end site-->

    <div class="input-info">
        <!--the input div containe the information of the user-->
        <i class="fa fa-user"></i>
        <!--user name-->
        <input type="text" name="adminname" placeholder="Admin Name">
        <i class="fa fa-envelope"></i>
        <!--user email-->
        <input type="email" name="email" placeholder="E-mail" required autocomplete="off" validate>
        <i class="fa fa-lock"></i>
        <!--yser password-->
        <input type="password" name="pass" placeholder="Password">
        <!--the checkbox to make the browser remember the user-->
    </div>

    <div class="log-sign"><!--the login button and the sign up button>[to the sign up page]-->
        <button class="login" name="login" form="loginform"><i class="fa fa-mail-forward (alias)"></i> Log In</button><!--log in-->



    </div><!--end of the log-sign-->



  <br><br><p class="forget-password">If you forget your password please <a href="#">click here</a></p>

</form>
</div>

  </body>
</html>
