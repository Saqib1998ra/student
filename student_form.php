<?php

include("./create_tb.php");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <form action="./create_tb3.php" method="post" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="fname"><b>First Name</b></label>
          <input type="text" placeholder="Enter First name" name="fname" required>
          <label for="lname"><b>Last Name</b></label>
          <input type="text" placeholder="Enter Last Name" name="lname" required>
          <label for="dob">Date of Birth:</label>
          <input type="date" name="dob" required /><br />
          <label for="courses">Select up to 3 courses:</label><br />
      <input type="checkbox" name="courses[]" value="Physics" /> Physics<br />
      <input type="checkbox" name="courses[]" value="Chemistry" />
      Chemistry<br />
      <input type="checkbox" name="courses[]" value="Maths" /> Maths<br />
      <input type="checkbox" name="courses[]" value="Biology" /> Biology<br />
          <label for="cnic"><b>CNIC</b></label>
          <input type="text" placeholder="Enter cnic" name="cnic" required>
      
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" name= "submit" class="signupbtn" value="submit">Sign Up</button>
    </div>
  </div>
</form>
</body>
</html>