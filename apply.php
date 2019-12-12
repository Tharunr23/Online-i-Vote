<?php
      include("connection.php");
      session_start();

      if($_SERVER["REQUEST_METHOD"] == "POST") {
      $fname = mysqli_real_escape_string($conn,$_POST['firstname']);
      $lname = mysqli_real_escape_string($conn,$_POST['lastname']); 

$email = mysqli_real_escape_string($conn,$_POST['email']);
$pass = mysqli_real_escape_string($conn,$_POST['pass']);
$phone1 = mysqli_real_escape_string($conn,$_POST['phone1']);
$phone2 = mysqli_real_escape_string($conn,$_POST['phone2']);
$bday = mysqli_real_escape_string($conn,$_POST['bday']);
$voter = mysqli_real_escape_string($conn,$_POST['voter']);
$aadhar = mysqli_real_escape_string($conn,$_POST['aadhar']);
//$flag = 0;


      $sql="insert into request2 values('$fname','$lname','$email','$pass','$phone1','$phone2','$bday','$voter','$aadhar','0')";
       $result = mysqli_query($conn,$sql); 
//echo $_SESSION["name"];       
//echo "REGISTERED SUCCESSFULLY";
       
       header("location: regfinish.php");
}
?>
