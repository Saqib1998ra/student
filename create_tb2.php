<?php

include("conn_db.php");

if(isset($_POST['submit'])){

  $uname = $_POST["uname"];
  $password = $_POST["password"];


  $sql = "INSERT INTO `login` (`uname`, `pass`) VALUES ('$uname', '$password')";
 
  $res = mysqli_query($conn, $sql);

  if ($res) {
    echo "login Inserted";
  }

}

?>