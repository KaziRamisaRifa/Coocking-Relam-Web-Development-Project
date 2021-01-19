<?php
  // Create database connection
  include 'connection.php';

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...



  if (isset($_POST['participate'])) {
header("Location: upload.php");
    }


$result = mysqli_query($conn, "SELECT * FROM contest");
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
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['Image']."' >";
        echo "<h4>Contest Name: </h4>";
      	echo "<p>".$row['Contest_Name']."</p>";
        echo "<h4>Contest Type: </h4>";
        echo "<p>".$row['Contest_Type']."</p>";
        echo "<form method='POST' action='upload.php' >";
        echo "<br><br><br><br><h4>Contest Details: </h4>";
        echo "<p>".$row['Contest_Details']."</p>";
        echo "<button type='submit' name='participate'>Participate Now</button>";
        echo "</form>";
      echo "</div>";
    }

  ?>


</div>
</body>
</html>
