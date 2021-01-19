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
    $user_name = strip_tags($_POST['user_name']);
  	$dish_name = mysqli_real_escape_string($conn, $_POST['dish_name']);
    $dish_type = mysqli_real_escape_string($conn, $_POST['dish_type']);
    $dish_details = mysqli_real_escape_string($conn, $_POST['dish_details']);

    $sql = "SELECT User_Name FROM user";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $UserName= $row["User_Name"];
    // Check if the username and the password they entered was correct
    if ($UserName == $user_name) {
      $sql = "INSERT INTO contestant (Image, User_Name, Dish_Name, Dish_Type, Dish_Details)
      VALUES ('$image', '$user_name' ,'$dish_name', '$dish_type', '$dish_details');";
      mysqli_query($conn, $sql);

      $sql = "SELECT u.User_ID
      FROM user u
      JOIN contestant c
      ON u.User_Name=c.User_Name;";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);
      $dbUserid= $row["User_ID"];


      $sql = "UPDATE contestant
SET User_ID='$dbUserid'
WHERE User_Name='$user_name' ";
      // execute query
      mysqli_query($conn, $sql);
      $target = "images/".basename($image);


    /*	$sql = "INSERT INTO contestant (Image, User_ID, User_Name Dish_Name, Dish_Type, Dish_Details)
      VALUES ('$image','$Userid', '$user_name' ,'$dish_name', '$dish_type', '$dish_details')";
    	// execute query
    	mysqli_query($conn, $sql);*/


      /*if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    		$msg = "Image uploaded successfully";
    	}else{
    		$msg = "Failed to upload image";*/
    	}

    }


  }

}



  if (isset($_POST['vote'])) {
    header("Location: user_login.php");
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
        echo "<h4>User Name: </h4>";
      	echo "<p>".$row['User_Name']."</p>";
        echo "<h4>Dish Name: </h4>";
      	echo "<p>".$row['Dish_Name']."</p>";
        echo "<h4>Dish Type: </h4>";
        echo "<p>".$row['Dish_Type']."</p>";
        echo "<h4>Dish Details: </h4>";
        echo "<p>".$row['Dish_Details']."</p>";
        echo "<form method='POST' action='upload.php' >";
        echo "<button type='submit' name='vote'>Vote</button>";
        echo "</from>";
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
      	cols="20"
      	rows="1"
      	name="user_name"
      	placeholder="User Name"></textarea>
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
