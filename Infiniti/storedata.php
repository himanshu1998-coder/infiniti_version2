<?php
ob_start(); 
if(isset($_POST['enquiryFullName'])){
   $server = "localhost";
   $username = "root";
   $password = "";

   $con = mysqli_connect($server, $username, $password);

   if(!$con){
       die("connection failed");
   }
   echo "successfully connected";
$name = $_POST['enquiryFullName'];
$email = $_POST['enquiryEmail'];
$phone = $_POST['enquiryPhoneNumber'];
$sql = "INSERT INTO `kgkv2landingpage`.`infinityquiry` (`quiryname`, `quiryemail`, `quiryphone`) VALUES ('$name', '$email', '$phone')";


if($con->query($sql) == true){
 header("Location: http://localhost/kgk_v2/infiniti/thanku.php");
  exit();
}
else{
 echo "error: $sql <br> $con->error";
}
$con->close();
}
if(isset($_POST['visitFullName'])){
   $server = "localhost";
   $username = "root";
   $password = "";

   $con = mysqli_connect($server, $username, $password);

   if(!$con){
       die("connection failed");
   }
   echo "successfully connected";
$name = $_POST['visitFullName'];
$email = $_POST['visitEmail'];
$phone = $_POST['visitPhoneNumber'];
$sql = "INSERT INTO `kgkv2landingpage`.`infinityvisit` (`visitname`, `visitemail`, `visitphone`) VALUES ('$name', '$email', '$phone')";


if($con->query($sql) == true){
 header("Location: http://localhost/kgk_v2/infiniti/thanku.php");
  exit();
}
else{
 echo "error: $sql <br> $con->error";
}
$con->close();
}
ob_end_flush();
?> 