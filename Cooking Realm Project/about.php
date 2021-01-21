<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-wiidth,initial-scale=1">
    <title>About</title>

    <!-- about.css-->
    <link rel="stylesheet" href="CSS/about.css">

  </head>
  <body>
    <header>
      <?php include 'header.php';?>
    </header>

    <div class="aboutBground">

    <div id='AppendHere'></div>

    <!-- About Cooking realm section-->
    <div class="About_Cooking_realm">
      <div class="container">
        <div class="row">

          <div class="col-md-2">
            <div class="image__background">
              <img src="Images/food.jpg" class="image__responsive">
            </div>
          </div>

        <div class="col-md-8">
          <h4>About Cooking Realm</h4>
           <p> Cooking is a process that often becomes a great pastime for many people. Here you can find a vast number of recipes, learn diffent cooking skills and upload recipes along with photos of the dish. There are many exciting events and contests for the users. Moreover, a user can buy membership and get many benefits than the regular user.</p>
          <a href="front.php" class="botton">See More</a>
        </div>

        </div>

      </div>
    </div>


  </body>
</html>
