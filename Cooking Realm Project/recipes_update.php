<?php
  // Create database connection
  include 'connection.php';

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text

  	$dish_name = mysqli_real_escape_string($conn, $_POST['dish_name']);
    $dish_type = mysqli_real_escape_string($conn, $_POST['dish_type']);
    $dish_ingredients = mysqli_real_escape_string($conn, $_POST['dish_ingredients']);
    $dish_details = mysqli_real_escape_string($conn, $_POST['dish_details']);

      $sql = "INSERT INTO recipe (Image, Dish_Type, Dish_Name, Dish_Ingredients, Dish_Details)
      VALUES ('$image' ,'$dish_type', '$dish_name', '$dish_ingredients','$dish_details');";
      mysqli_query($conn, $sql);

    	}



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

  <form method="POST" action="recipes_update.php" enctype="multipart/form-data"  >
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
    <div>
      <textarea
      	id="text"
      	cols="20"
      	rows="1"
      	name="dish_name"
      	placeholder="Dish Name"></textarea>
  	</div>
    <div>
      <textarea
      	id="text"
      	cols="20"
      	rows="1"
      	name="dish_type"
      	placeholder="Dish Type"></textarea>
  	</div>
  	<div>
      <textarea
      	id="text"
      	cols="40"
      	rows="4"
      	name="dish_ingredients"
      	placeholder="Dish Ingredients"></textarea>
  	</div>

    <div>
      <textarea
        id="text"
        cols="40"
        rows="4"
        name="dish_details"
        placeholder="Dish Details"></textarea>
    </div>


  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>
</body>
</html>
