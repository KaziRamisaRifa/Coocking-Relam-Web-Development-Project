<?php
  // Create database connection
  include 'connection.php';

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...

  if (isset($_POST['participate'])) {
    $contestid = strip_tags($_POST['contest_code']);
    // execute query
    header("Location: upload.php?id=$contestid");
    }


$result = mysqli_query($conn, "SELECT * FROM contest");
?>

<!DOCTYPE html>
<html>
<head>
<title>Contest</title>
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
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['Image']."' >";
        echo "<h4>Contest Name: </h4>";
      	echo "<p>".$row['Contest_Name']."</p>";
        echo "<h4>Contest Type: </h4>";
        echo "<p>".$row['Contest_Type']."</p>";
        echo "<h4>Contest Status: </h4>";
        echo "<p>".$row['Contest_Status']."</p>";
        echo "<h4>Contest Winner: </h4>";
        echo "<p>".$row['Contest_Winner']."</p>";
        echo "<form method='POST' action='contest_user.php' >";
        echo "<br><h4>Contest Details: </h4>";
        echo "<p>".$row['Contest_Details']."</p>";
        echo "<h4>Contest Code: </h4>";
        echo "<p>".$row['Contest_ID']."</p>";
        echo "<textarea
        	id='text'
        	cols='20'
        	rows='1'
        	name='contest_code'
        	placeholder='Contest Code'></textarea><br>";
        echo "<button type='submit' name='participate'>Participate Now</button>";
        echo "</form>";
      echo "</div>";
    }

  ?>

</div>
</body>
</html>
