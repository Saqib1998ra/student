<?php
include("conn_db.php");

if(isset($_POST['submit'])){

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$cnic = $_POST["cnic"];
$dob = $_POST["dob"];


$sql = "INSERT INTO `admin` (`fname_db`, `lname_db`, `dob_db`, `cnic_db`) VALUES ('$fname', '$lname', '$dob', '$cnic')";

$res = mysqli_query($conn, $sql);

if ($res) {
    echo "data inserted";
 }

}
  
?>