<?php

include("conn_db.php");

if(isset($_POST['submit'])){

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$password= $_POST["password"];


$sql = "INSERT INTO `user_signup` (`email`, `pass`, `fname`, `lname`) VALUES ('$email', '$password', '$fname', '$lname')";

$res = mysqli_query($conn, $sql);

if ($res) {
    echo "data inserted";
 }

}
  
?>