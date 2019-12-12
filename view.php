<!DOCTYPE html>
<html>
<head>
	<title>Final Result</title>
	<style>
	body{
		background-color: lightpink;
	}

	div{
	border: 2px solid black;
	margin-top: 100px;
	margin-bottom: 100px;
	margin-right: 400px;
	margin-left: 400px;
	background-color: lightblue;
	text-align: center;
	}	

	.img2{
		float: right;
		margin-right: 70px;
		height: 400px;
		width: 250px;			

	}

	.img1{
		float: left;
		/*margin-top: 30px;
		*/margin-left: 70px;
		height: 400px;
		width: 250px;
	}

	h1{
		margin-top: 30px;
	}
	</style>
</head>
<body>
	<p><h1 align="center">FINAL RESULTS</h1></p>
	<img class="img1" src="3.jpg">
	<img class="img2" src="6.jpg">
	<div>
		<p ><h3>
			<?php
   include("connection1.php");

$sql="SELECT * FROM finalvote";

if ($result=mysqli_query($conn,$sql))
  {

  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {

    printf ("%s %s ",$row[0],$row[1]);
    echo "<br><br>";


    }

  // Free result set
  mysqli_free_result($result);
}

?>
			
	</h3>
	

	</p>
	</div>
	</body>
</html>





