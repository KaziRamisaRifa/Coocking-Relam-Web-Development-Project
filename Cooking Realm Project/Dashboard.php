<?php
/*
  session_start();
  $username = "";
  $password = "";
  if (isset($_POST['uname'])){
    $username = $_POST['uname'];
    $_SESSION["user"] = $username;
  }
  if (isset($_POST['psw'])) {
    $password = $_POST['psw'];
  }

*/
include 'connection.php';
  $sql = "SELECT * FROM Contact";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {



?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<body>


  <header>
    <?php include 'header.php';?>
              </header>

<table width="100%">
	  <tr>
	  	<th  width= "30%">Name</th>
	  	<th  width= "30%">Email</th>
	  	<th  width= "40%">Comments</th>
	  </tr>
	  <?php
     while($row = mysqli_fetch_assoc($result)) {
		 ?>
				<tr>
                                        <td>
                                            <?php echo $row["Name"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["Email"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["Comments"]; ?>
                                        </td>
                                        	 </tr>

		 <?php

     }
	 ?>
	 </table>
	 <?php

   } else {
     echo "0 results";
   }

   mysqli_close($conn);
?>
<!---<a href="Logout.php">Logout</a>-->
	<footer></footer>
</body>
</html>
