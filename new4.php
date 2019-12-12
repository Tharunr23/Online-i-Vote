<?php
   include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['fname1']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password1']);
      
      
//echo" $myusername    $mypassword";

      $sql = "SELECT * FROM admin WHERE voter LIKE '".mysql_real_escape_string ($myusername)."' and pass LIKE '".mysql_real_escape_string ($mypassword)."' ";

 
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//      $active = $row['active'];
      
      $count = mysqli_num_rows($result);

if($count == 1) {
      
    
      header("location: view.php");
      }
      
      else {
         $error = "Your Login Name or Password is invalid ";
         header("location: invalid2.php");
      }
   }
?>