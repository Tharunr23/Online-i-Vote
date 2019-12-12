<?php
   include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['fname1']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password1']); 
     // $myflag = '1';

//echo" $myusername    $mypassword";

      $sql = "SELECT * FROM request2 WHERE voter LIKE '".mysql_real_escape_string ($myusername)."' and pass LIKE '".mysql_real_escape_string ($mypassword)."' and flag IN ('0') ";

 
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//      $active = $row['active'];
      
      $count = mysqli_num_rows($result);

      //$myflag = mysqli_real_escape_string($conn,$_POST['flag'])
/*
      $sql1 = "SELECT * FROM request2 Where flag IN ('0')";

      $res = mysqli_query($conn,$sql1);

     $row1 = mysqli_fetch_array($res,MYSQLI_ASSOC);
      $count1  = mysqli_num_rows($res);
//echo "$count";      
      // If result matched $myusername and $mypassword, table row must be 1 row*/

	
      if($count == 1) {
      
 //     if($count1==1){       
         $sql="update request2 set flag=flag+1 where voter like '$myusername' " ;mysqli_query($conn,$sql);
         header("location: result.php");
   //   }
      }
      else {
         $error = "Your Login Name or Password is invalid ";
         header("location: invalid.php");
      }
   }
?>
