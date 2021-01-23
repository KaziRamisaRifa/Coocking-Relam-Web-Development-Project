<?php
  // Create database connection
  include 'connection.php';


$result = mysqli_query($conn, "SELECT * FROM feedback");
?>

<!DOCTYPE html>
<html>
<head>
<title>See Feedback</title>
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
        echo "<h4>User Name: </h4>";
      	echo "<p>".$row['User_Name']."</p>";
        echo "<h4>Email: </h4>";
      	echo "<p>".$row['Email']."</p>";
        echo "<h4>Experience: </h4>";
        echo "<p>".$row['Experience']."</p>";
        echo "<h4>Message: </h4>";
        echo "<p>".$row['Message']."</p>";
    }

  ?>

</div>
</body>
</html>
