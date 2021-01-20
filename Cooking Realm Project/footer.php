<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, address, phone, icons" />

	<title>Footer</title>

  <!-- footer.css-->
  <link rel="stylesheet" href="CSS/footer.css">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

</head>
	<body>
    <header>
      <?php include 'header.php';?>
    </header>
    
		<footer class="footer-distributed">

<!-- footer.left-->
			<div class="footer-left">
				<h3>Cooking<span>Realm</span></h3>
				<p class="footer-company-name">Developed and Maintained by Cooking Realm Admins, NSU <br>© 2020 Cooking Realm, Nort South University.<br> All rights reserved.</p>
			</div>

<!-- footer.center-->
			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					  <p>Bashundhara, Dhaka-1229, Bangladesh</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+880 1706226393</p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:abid.fahim@northsouth.edu">cookingrealm.bd@northsouth.edu</a></p>
				</div>
			</div>

  <!-- footer.right-->
			<div class="footer-right">
				<p class="footer-company-about">
					<span>About the website</span>
					Cooking is a process that often becomes a great pastime for many people. Here you can find a vast number of recipes, learn diffent cooking skills and upload recipes along with photos of the dish.</p>
				<div class="footer-icons">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-youtube"></i></a>
				</div>
			</div>
		</footer>
	</body>
</html>
