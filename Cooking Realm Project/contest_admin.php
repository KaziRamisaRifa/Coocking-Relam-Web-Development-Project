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
    $contest_name = mysqli_real_escape_string($conn, $_POST['contest_name']);
    $contest_type = mysqli_real_escape_string($conn, $_POST['contest_type']);
    $contest_details = mysqli_real_escape_string($conn, $_POST['contest_details']);

    $sql = "INSERT INTO contest (Image, Contest_Name, Contest_Type, Contest_Details,Contest_Winner, Contest_Status)
    VALUES ('$image', '$contest_name' , '$contest_type', '$contest_details','Not Declared','Active');";
    mysqli_query($conn, $sql);

    	}

      if (isset($_POST['del_contest'])) {
        $contestid = strip_tags($_POST['contest_code']);

              $sql = "DELETE FROM contest WHERE contest.Contest_ID = '$contestid'";
              // execute query
              mysqli_query($conn, $sql);
    }

    if (isset($_POST['winner'])) {
      $contestid = strip_tags($_POST['winner_code']);
    $sql = "SELECT User_Name, MAX(Score)
FROM contestant
WHERE Contest_ID='$contestid'
GROUP BY User_Name;";
    $result =  mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $UserName= $row["User_Name"];

    $sql = "UPDATE contest
SET Contest_Winner='$UserName' && Contest_Status='Inactive'
WHERE Contest_ID='$contestid' ";
mysqli_query($conn, $sql);





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
        echo "<h4>Contest Status: </h4>";
        echo "<p>".$row['Contest_Status']."</p>";
        echo "<h4>Contest Winner: </h4>";
        echo "<p>".$row['Contest_Winner']."</p>";
        echo "<form method='POST' action='contest_admin.php' >";
        echo "<br><br><h4>Contest Details: </h4>";
        echo "<p>".$row['Contest_Details']."</p>";
        echo "<h4>Contest Code: </h4>";
        echo "<p>".$row['Contest_ID']."</p>";
        echo "<textarea
        	id='text'
        	cols='25'
        	rows='1'
        	name='contest_code'
        	placeholder='Type contest code'></textarea><br>";
        echo "<button type='submit' name='del_contest'>Delete Contest</button>";
        echo "<textarea
        	id='text'
        	cols='25'
        	rows='1'
        	name='winner_code'
        	placeholder='Type contest code'></textarea><br>";
        echo "<h4><br>Declare Winner: </h4>";
        echo "<button type='submit' name='winner'>Press To Declare</button>";
        echo "</form>";
      echo "</div>";
    }

  ?>

  <form method="POST" action="contest_admin.php" enctype="multipart/form-data"  >
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
    <div>
      <textarea
      	id="text"
      	cols="20"
      	rows="1"
      	name="contest_name"
      	placeholder="Contest Name"></textarea>
  	</div>
  	<div>
      <textarea
      	id="text"
      	cols="20"
      	rows="1"
      	name="contest_type"
      	placeholder="Contest Type"></textarea>
  	</div>
    <div>
      <textarea
      	id="text"
      	cols="40"
      	rows="4"
      	name="contest_details"
      	placeholder="Contest Details"></textarea>
  	</div>



  	<div>
  		<button type="submit" name="upload">Upload Contest</button>
  	</div>
  </form>
</div>
</body>
</html>
