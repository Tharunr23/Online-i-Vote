<html>
<head>
<title>update phn num</title>
<style>
body{
	background-color: powderblue;
}
div{
	border: 2px solid black;
	margin-top: 100px;
	margin-bottom: 100px;
	margin-right: 400px;
	margin-left: 400px;
	background-color: coral;
}
</style>
</head>
<body>
<div>
<form action="new3.php" method="POST">
  <p align="center">User id:<input type="text" name="fname1" required></p>
  
  <p align="center">Password: <input type="password" name="password1"></p>
  <p align="center">Enter Phone number to be updated:<input type="number" name="phoneno1" min="1000000000" max="9999999999"  ></p>

  <p align="center"><input type="submit" name="Update"></p>
</form>
</div>
</body>
</html>