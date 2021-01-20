<?php
  // Create database connection
  include 'connection.php';



$result = mysqli_query($conn, "SELECT * FROM recipe");
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
    <h1> Recipes </h1>
              </header>
<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['Image']."' >";
        echo "<h4>Dish Name: </h4>";
      	echo "<p>".$row['Dish_Name']."</p>";
        echo "<h4>Dish Type: </h4>";
      	echo "<p>".$row['Dish_Type']."</p>";
        echo "<br><br><br><br><br><h4>Dish Ingredients: </h4>";
        echo "<p>".$row['Dish_Ingredients']."</p>";
        echo "<br><h4>Dish Details: </h4>";
        echo "<p>".$row['Dish_Details']."</p>";
      echo "</div>";
    }

  ?>


</div>
</body>
</html>
