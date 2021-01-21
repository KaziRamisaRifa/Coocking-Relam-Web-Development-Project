<?php
  // Create database connection
  include 'connection.php';

$username =  $_GET['id'];



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="CSS/user_profile.css">

    <!-- Bootstrap Grid System-->
    <link rel="stylesheet" href="CSS/bootstrap-grid.css">
  </head>
  <body>
    <header>
      <?php include 'header.php';?>
    </header>


<div class="card">

  <h1>Welcome <?php echo $username ?>! </h1>

  <p></p>

  <p><button><a href="contest_admin.php">Update Contest</button></p><br>
  <p><button><a href="recipes_update.php">Update Recipes</button></p><br>
  <p><button><a href="feedback_admin.php">Feedback Review</button></p><br>
</div>

  </body>
</html>
