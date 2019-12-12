<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Vote here</title>
	<style >
	body{
		background-color:  #ffccff;	
	}	
	div {
		align-content: center;
		border: 4px solid black;
		margin-top: 100px;
		margin-bottom: 100px;
		margin-right: 350px;
		margin-left: 350px;
		background-color:   #800055;
		padding-left: 50px;
		
		text-align: justify;
	}
	h1{
	color: black;
	text-align: center;
	font-size: 300%;
	font-family: serif;
	}
	img{
		float: right;
		margin-right: 50px;
	}
	h3{
		color: white;
	}


	/*.new{
		float: right;
		margin-right: 50px;
	}*/
	
	</style>
	
</head>
<body>

	

	<p><h1>Vote Here</h1></p>
	<ul>
		<form action="shinvote.php" >
		<div>
		<br>
		<img src="shinchan.jpeg" width="60" height="60"><p><h3>SHINCHAN HEROS</h3><input class="new" type="submit" name="submit"></p>
		
		<br>
	</div>
</form>
<form  action="doraemonvote.php">
	<div>
		<br>
		<img src="doramon.jpeg" width="60" height="60">	<p><h3>DORAEMON AND TEAM</h3><input class="new" type="submit" name="submit"></p>
		<br>
	</div>
</form>
<form action="doravote.php" >
	<div>
		<br>
		<img src="dora.jpeg" width="60" height="60"><p><h3>DORA EXPLORERS</h3><input class="new" type="submit" name="submit"></p>
		<br>
	</div>
</form>
<form action="spdvote.php" >
	<div>	
		<br>
		<img src="power.jpeg" width="60" height="60"><p><h3>SPD EMERGENCY</h3><input class="new" type="submit" name="submit"></p>
		<br>
	</div>
</form>
	</ul>

</body>
</html>