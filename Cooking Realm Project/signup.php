<?php
include 'connection.php';

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-wiidth,initial-scale=1">
    <title>Sign Up</title>

    <!-- style.css-->
    <link rel="stylesheet" href="CSS/signup.css">

  </head>
  <body>
    <header>
      <?php include 'header.php';?>
                </header>

    <div class="signform"> <h1>SIGN UP FORM</h1> </div>

<div class="main">
    <form name="signform" class="" action="signup.php" method="POST" onsubmit="return validateForm();">

      <h2 class="name"> First Name</h2>
              <input class="firstname" type="text" name="first_name" placeholder="Enter your first name">

       <h2 class="name">Last Name</h2>
              <input class="lastname" type="text" name="last_name" placeholder="Enter your last Name">


      <h2 class="name">Username</h2>
        <input class="username" type="text" name="username" value="" placeholder="Enter a username">


        <h2 class="name">Birth Date</h2>
        <input class="birth" type="DATE" name="birth" value="">


        <h2 class="name">Email</h2>
        <input class="email" type="text" name="email" value="" placeholder="Enter your email">


        <h2 class="name"> Phone </h2>
        <input class="code" type="text" name="phone" value="" placeholder="Contact Number">




        <h2 class="name">Country</h2>
        <select class="option" name="country" value="">
          <option disabled="disabled" selected="selected">Choose Option</option>
          <option> Bangladesh </option>
          <option> America </option>
          <option> China </option>
          <option> Japan </option>
          <option> Germany </option>
          <option> Kuwait </option>
        </select>


      <h2 class="name">Password</h2>
        <input class="password" type="password" name="pass" value="" placeholder="Enter your password">


      <h2 id="user">Do You Like Cooking?</h2>

      <label class="radio">
        <input class="radio-one" type="radio" checked="checked" name="beg">
        <span class="checkmark"> </span>
         Yes
      </label>

      <label class="radio">
        <input class="radio-two" type="radio" name="beg">
        <span class="checkmark"> </span>
         No
      </label>


      <button type="submit">Submit</button>
</div>



</div>
<?php
if(isset($_POST['username'])){
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$uname = $_POST['username'];
$birth = $_POST['birth'];
$contact = $_POST['phone'];
$country = $_POST['country'];
$email = $_POST['email'];
$pass = $_POST['pass'];

//INSERT INTO `user`( `User_Name`, `First_Name`, `Last_Name`, `Date_of_birth`, `Country`, `Contact_Number`, `Email`, `Password`, `Premium_ID`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10])

if($fname != ""){
if (mysqli_query($conn,  "INSERT INTO user(User_Name, First_Name, Last_Name, Date_of_birth, Country, Contact_Number, Email, Password)
VALUES ('$uname','$fname','$lname','$birth','$country','$contact','$email','$pass')")) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}


mysqli_close($conn);
}
?>

  </body>
</html>
