<?php
  // Create database connection
  include 'connection.php';
$username =  $_GET['id'];

if (isset($_POST['user_edit']))
{
  $dbUsname = strip_tags($_POST['username']);

  $sql = "SELECT User_Name FROM user";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
  $UserName= $row["User_Name"];

  // Check if the username and the password they entered was correct
  if ($UserName == $dbUsname) {
header("Location: edit_profile.php?id=$username");
  }
}
}
$sql = "UPDATE user
SET User_Name='$dbUsname'
WHERE User_Name='$username' ";
// execute query
mysqli_query($conn, $sql);

/*$sql= "DELIMITER $$
       CREATE TRIGGER after_update
       after update on user for each row
       begin
       if old.User_Name <> new.User_Name then
       UPDATE contestant
       SET User_Name=new.User_Name
       WHERE User_Name=old.User_Name;
       end if;
       end $$
DEMIMITER;";
    mysqli_query($conn, $sql);*/

header("Location: edit_profile.php?id=$dbUsname");
}

if (isset($_POST['edit_pass']))
{
  $dbpass = strip_tags($_POST['pass']);
  $sql = "UPDATE user
  SET Password='$dbpass'
  WHERE User_Name='$username' ";
  // execute query
  mysqli_query($conn, $sql);




  header("Location: edit_profile.php?id=$username");
}

if (isset($_POST['edit_pass']))
{
  $dbpass = strip_tags($_POST['pass']);
  $sql = "DELETE user
  WHERE User_Name='$username' ";
  // execute query
  mysqli_query($conn, $sql);
  /*DELIMITER $$
         CREATE TRIGGER after_delete
         after delete on user for each row
         begin
         DELETE FROM contestant
         WHERE User_Name=old.User_Name;
         end $$
  DEMIMITER;*/



  header("Location: user_login.php");
}


$result = mysqli_query($conn, "SELECT * FROM user WHERE User_Name='$username'");
?>

<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link rel="stylesheet" href="CSS/upload.css">

<!-- Bootstrap Grid System-->
<link rel="stylesheet" href="CSS/bootstrap-grid.css">


</style>
</head>
<body>
  <header>
    <?php include 'header.php';?>
    <style>
h1 {
  text-align: center;
}</style>
    <h1> Contest </h1>
              </header>
<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<form method='POST' action='edit_profile.php?id=$username' >";
        echo "<h4>User Name: </h4>";
      	echo "<p>".$row['User_Name']."</p>";
        echo "<textarea
        	id='text'
        	cols='20'
        	rows='1'
        	name='username'
        	placeholder='Set Username'></textarea><br>";
        echo "<button type='submit' name='user_edit'>Edit Username</button>";
        echo "<h4>Password: </h4>";
      	echo "<p>".$row['Password']."</p>";
        echo "<textarea
        	id='text'
        	cols='20'
        	rows='1'
        	name='pass'
        	placeholder='Set Password'></textarea><br>";
        echo "<button type='submit' name='edit_pass'>Edit Password</button>";

        echo "<br><br><button type='submit' name='delete_user'>Delte User</button>";
        echo "</form>";

    }

  ?>
</div>
</body>
</html>
