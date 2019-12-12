<?php
   include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['fname1']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password1']); 
       $myphone = mysqli_real_escape_string($conn,$_POST['phoneno1']); 
     
//echo" $myusername    $mypassword";

      $sql = "SELECT * FROM request2 WHERE voter LIKE '".mysql_real_escape_string ($myusername)."' and pass LIKE '".mysql_real_escape_string ($mypassword)."' ";

 
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      if($count == 1) 
      {
      $sql="update request2 set phone1= '$myphone' where voter like '".mysql_real_escape_string ($myusername)."' ";mysqli_query($conn,$sql);
      header("location: conf_update.php");
      }
      else{
           $error = "Your Login Name or Password is invalid ";
         header("location: invalid1.php");
      
      }
   }
?>