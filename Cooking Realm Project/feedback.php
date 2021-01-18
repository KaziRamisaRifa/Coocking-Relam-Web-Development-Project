<?php
include 'connection.php';
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

			<form>
				<label class="radio-inline"><input type="radio" name="experience" value="bad">Bad</label>
				<label class="radio-inline"><input type="radio" name="experience" value="bad">Average</label>
				<label class="radio-inline"><input type="radio" name="experience" value="bad">Good</label>

			</div>
			</div>

      <div class="row">
              <!-- for name-->
      				<div class="col-md-2"></div>
      				<label class="col-md-4">Full Name<br>
      				<input type="text" id="text" required="" placeholder="Your Full Name"></label>

              <!-- for mail-->
              <label class="col-md-4">Email<br>
      				<input type="text" id="text" required="" placeholder="Your Email"></label>
      	</div>

             <!-- for message-->
      			<div class="row">
      				<div class="col-md-2"></div>
      				<label class="col-md-8">Message<br>
      				<textarea id="message" required="" placeholder="Write yor message here..." cols="48" rows="5"></textarea></label>
      			</div>

              <!-- for botton-->
      						<div class="row">
      				<div class="col-md-2"></div>
      				<button class="btn btn-primary" style="width: 53.5%; position: absolute; margin-left: 15%;">Submit</button>
      			</div>
      			</form>
      </div>

      </body>
      </html>
