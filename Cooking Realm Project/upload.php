<?php
  // Create database connection
  include 'connection.php';

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$dish_name = mysqli_real_escape_string($conn, $_POST['dish_name']);
    $dish_type = mysqli_real_escape_string($conn, $_POST['dish_type']);
    $dish_details = mysqli_real_escape_string($conn, $_POST['dish_details']);

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO contestant (Image, Dish_Name, Dish_Type, Dish_Details)
    VALUES ('$image', '$dish_name', '$dish_type', '$dish_details')";
  	// execute query
  	mysqli_query($conn, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}


  }
  $result = mysqli_query($conn, "SELECT * FROM contestant");

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
              </header>
<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['Image']."' >";
        echo "Dish Name:";
      	echo "<p>".$row['Dish_Name']."</p>";
        echo "Dish Type:";
        echo "<p>".$row['Dish_Type']."</p>";
        echo "Dish Details:";
        echo "<p>".$row['Dish_Details']."</p>";
        echo "<button type='submit' name='upload'>Vote</button>";
      echo "</div>";
    }

  ?>

  <form method="POST" action="upload.php" enctype="multipart/form-data"  >
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea
      	id="text"
      	cols="40"
      	rows="4"
      	name="dish_name"
      	placeholder="Dish Name"></textarea>
  	</div>
    <div>
      <textarea
      	id="text"
      	cols="40"
      	rows="4"
      	name="dish_type"
      	placeholder="Dish Type"></textarea>
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
