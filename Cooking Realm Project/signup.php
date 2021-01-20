<?php
include 'connection.php';

if(isset($_POST['sign'])){

$fname = mysqli_real_escape_string($conn, $_POST['first_name']);
$lname = mysqli_real_escape_string($conn, $_POST['last_name']);
$uname = mysqli_real_escape_string($conn, $_POST['username']);
$birth = mysqli_real_escape_string($conn, $_POST['birth']);
$contact = mysqli_real_escape_string($conn, $_POST['phone']);
$country = mysqli_real_escape_string($conn, $_POST['country']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass = mysqli_real_escape_string($conn, $_POST['pass']);

//INSERT INTO `user`( `User_Name`, `First_Name`, `Last_Name`, `Date_of_birth`, `Country`, `Contact_Number`, `Email`, `Password`, `Premium_ID`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10])
$sql = "SELECT User_Name,Email,Contact_Number FROM user";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
$UserName= $row["User_Name"];
$dbEmail= $row["Email"];
$Contact_number= $row["Contact_Number"];
// Check if the username they entered was correct
if ($UserName == $uname && $dbEmail== $email  && $Contact_number == $contact) {

  if($UserName == $uname)
  {
    echo "<script>
  alert('Same User Name Exist! Try Another User Name');
  window.location.href='signup.php';
  </script>";
}else if($dbEmail== $email)
{
  echo "<script>
alert('Same User Email Exist! Input Another Email');
window.location.href='signup.php';
</script>";
}else if($Contact_number == $contact)
{
  echo "<script>
alert('Same User Contact Number Exist! Input Another Contact Number');
window.location.href='signup.php';
</script>";
}else {
  echo "<script>
alert('Same User Input Exist! Input Unique User Input');
window.location.href='signup.php';
</script>";
}

  }

}
}
 $sql="INSERT INTO user(User_Name, First_Name, Last_Name, Date_of_birth, Country, Contact_Number, Email, Password)
VALUES ('$uname','$fname','$lname','$birth','$country','$contact','$email','$pass')";
mysqli_query($conn, $sql);


}






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
    <form name="signform" class="" action="signup.php" method="POST" >

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


      <button type="submit" name="sign">Submit</button>
</div>



</div>

  </body>
</html>
