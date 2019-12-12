<?php
include("connection.php");
session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
   
        $myemail = mysqli_real_escape_string($conn,$_POST['email1']);



$sql="update request1 set email=$myemail ";mysqli_query($conn,$sql);
?>