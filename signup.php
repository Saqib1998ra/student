<?php
session_start();

include("./create_tb.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){

  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $email = $_POST["email"];
  $password= $_POST["password"];

  if(!empty($email) && !empty($password) && !is_numeric($email)){

    $query = "INSERT INTO user_signup (email, pass, fname, lname) VALUES ('$email', '$password', '$fname', '$lname')";
   
    mysqli_query($conn, $query);
    echo "<script type='text/>javascript'> alert('Successfully Register')</script>";
  }
  else{
    echo "<script type='text/>javascript'> alert('Register unsucessfull')</script>";
  }

}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <form action="./create_tb.php" method="post" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="fname"><b>First Name</b></label>
          <input type="text" placeholder="Enter First name" name="fname" required>
          <label for="lname"><b>Last Name</b></label>
          <input type="text" placeholder="Enter Last Name" name="lname" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
  
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" name= "submit" class="signupbtn" value="submit"><a href="login.php">Sign Up</a></button>
    </div>
  </div>
</form>
</body>
</html>