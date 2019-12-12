<html>
<head>
<title>update password</title>
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
<form action="new5.php" method="POST">
  <p align="center">User id:<input type="text" name="fname1" required></p>
  
  <p align="center">Old Password: <input type="password" minlength="8"  name="password1"></p>

  <p align="center">Enter New password to be updated:<input type="password" minlength="8" name="password2"></p>

  <p align="center"><input type="submit" name="Update"></p>
</form>
</div>
</body>
</html>