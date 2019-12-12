
<!DOCTYPE html>
<html>
<head>
<meta "utf-8">
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="link1.css">
<style >
	h1{
		font-size: 300%;
	}


</style>


</head>

<body>
	<script type="check_confirm.js"></script>
	<p><h1 align="center"> Online Voting Portal</h1> </p>
	<div class="back">
		<p><img class="exone" src="10.jpg" alt="Image motivation">
			<img class="extwo" src="15.jpg" alt="flag image">
		<br><h2 align="center">
				REGISTRATION FORM
		</h2><br>
		<br>
		<br>
		<form class="exthree" action="apply.php" method="POST">
			First name<sup style="color: red;">*</sup>:<br>
			<input align="center" type="text" name="firstname" required>
			<br><br>
			Last Name<sup style="color: red;">*</sup>:<br>
			<input type="text" name="lastname" required>
			<br><br>
			Email-id<sup style="color: red;">*</sup>:<br>
			<input type="email" name="email" required>
			<br><br>
			Password<sup style="color: red;">*</sup>:<br>
			<input type="password" name="pass" minlength="8" required><br>
			
			<h4>NOTE:THIS PASSWORD IS HIGHLY CONFIDENTIAL. DON'T SHARE.</h4>
			
			Mobile number:<br>
			Number 1<sup style="color: red;">*</sup>:<br>
			<input type="number" name="phone1" min="1000000000" max="9999999999" maxlength="10" required>
			<br><br>
			Number 2:<br>
			<input type="number" name="phone2" min="1000000000" max="9999999999" >
			<br><br>
			Birthday<sup style="color: red;">*</sup>:<br>
  			<input type="date" name="bday" max="2000-10-13" min="1900-10-13" required>
 			<br><br>
 			Select Gender<sup style="color: red;">*</sup>:<br>
			<input type="radio" name="gender" value="male" checked> Male<br>
  			<input type="radio" name="gender" value="female"> Female<br>
  			<input type="radio" name="gender" value="trans"> Transgender<br><br>
  			Voter-ID<sup style="color: red;">*</sup>:<br>
  			<input type="text" name="voter" minlength="10" maxlength="10"  placeholder="JSP7895412" required>
  			<br><br>
  			Aadhar num<sup style="color: red;">*</sup>:<br>
  			<input type="number" name="aadhar" min="100000000000" max="999999999999" placeholder="123490873456" required>
  			<br><br>
  			<input align="center" type="submit" value="Submit">
			</a>	
		</form>

			
		</p>
		
	</div>
	
	<script type="check_confirm.js">
		
		var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
		
	</script>
	


</body>
</html>