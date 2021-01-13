<?php
session_start();
if(!empty($_SESSION["username"]))
{
      if($_SESSION["username"] =="admin")
      {
        header('Location: admin_profile.php');
      }else{
//        header('Location: user_profile.php');
  header('Location: Dashboard.php');
      }
}
require 'connection.php';
if(isset($_POST['username']) && isset($_POST['password']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $login_user ="select * from user where User_Name='$username' && Password ='$password'";
    $result = $conn->query($login_user);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $_SESSION["username"] = $row['username'];

      }
      if($username =="admin")
      {
        header('Location: admin_profile.php');
      }else{
      //  header('Location: user_profile.php');
        header('Location: Dashboard.php');
      }
    }else{
      echo "<script>alert('wrong username & Password')</script>";
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <title>Login</title>
 <link rel="stylesheet" type="text/css" href="style.css">
        <style type="text/css">
            body {
                background-color: lightgreen;
            }

            input {
                left: 100px;
            }
        </style>
</head>
<body>
<header>
  <?php include 'header.php';?>
            </header>
        <div>
                        <form action="login.php" method="post">


                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" required placeholder="Username">

                                <label for="password">Password:</label>
                                <input type="password" id="password" name="password" required placeholder="Password">

                                <input type="checkbox" onclick="myFunction()"> &nbsp;Show Password
                            <button type="submit">Log In</button>
                        </form>


                        <p>Return to <a href="index.php">Home Page</a></p>
                    </div>
      <footer>  <?php include 'footer.php';?></footer>
</body>

</html>
<script type="text/javascript">
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

</script>
