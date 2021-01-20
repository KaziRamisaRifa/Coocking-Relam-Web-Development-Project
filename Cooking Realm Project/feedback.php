<?php
include 'connection.php';

if (isset($_POST['Submit_fb'])) {
    // Set variables to represent data from database
    $dbUsname = strip_tags($_POST['username']);
$dbEmail = strip_tags($_POST['email']);
$dbExperience = strip_tags($_POST['experience']);
$dbMessage = strip_tags($_POST['message']);

    $sql = "SELECT User_Name, Email FROM user";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $UserName= $row["User_Name"];
    $Email= $row["Email"] ;
    // Check if the username and the password they entered was correct
    if ($UserName == $dbUsname && $Email == $dbEmail) {

      $sql = "INSERT INTO feedback (User_Name, Email, Message, Experience)
      VALUES ('$dbUsname', '$dbEmail', '$dbMessage', '$dbExperience');";
      mysqli_query($conn, $sql);

      $sql = "SELECT u.User_ID
      FROM user u
      JOIN feedback f
      ON u.User_Name=f.User_Name;";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);
      $dbUserid= $row["User_ID"];


      $sql = "UPDATE feedback
      SET User_ID='$dbUserid'
      WHERE User_Name='$dbUsname' ";
      // execute query
      mysqli_query($conn, $sql);
        header("Location: user_login.php");

    }
  }
  // Display the alert box
  echo "<script>
  alert('Invalid User Name OR Email');
  window.location.href='feedback.php';
  </script>";



}

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
 	<title>Feedback</title>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="feedback.css">

</head>

<body>
  <header>
    <?php include 'header.php';?>
  </header>

  <div class="feedbackBground">

<div class="view">
	<img src="">
</div>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">

			<h1 class="text-center mt-5 font-weight-bold">Feedback</h1>
			<hr class="bg-white">
			<h6 class="text-center">Please write your feedback below:</h6>
			<h3 class="mt-4">How do you rate your overall experience?</h3>

			<form method="POST" action="feedback.php" enctype="multipart/form-data">
				<label class="radio-inline"><input type="radio" name="experience" value="Good">Good</label>
				<label class="radio-inline"><input type="radio" name="experience" value="Average">Average</label>
				<label class="radio-inline"><input type="radio" name="experience" value="Bad">Bad</label>

			</div>
			</div>

      <div class="row">
              <!-- for name-->
      				<div class="col-md-2"></div>
      				<label class="col-md-4">User Name<br>
      				<input type="text" id="text" name="username" required="" placeholder="Your User Name"></label>

              <!-- for mail-->
              <label class="col-md-4">Email<br>
      				<input type="text" id="text" name="email" required="" placeholder="Your Email"></label>
      	</div>

             <!-- for message-->
      			<div class="row">
      				<div class="col-md-2"></div>
      				<label class="col-md-8">Message<br>
      				<textarea id="message" name="message" required="" placeholder="Write yor message here..." cols="48" rows="5"></textarea></label>
      			</div>

              <!-- for botton-->
      						<div class="row">
      				<div class="col-md-2"></div>
      				<button class="btn btn-primary" name="Submit_fb" style="width: 53.5%; position: absolute; margin-left: 15%;">Submit</button>
      			</div>
      			</form>
      </div>

      </body>
      </html>
