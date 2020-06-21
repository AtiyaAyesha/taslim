<?php
include'config.php';




?>
<!DOCTYPE>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet"type="text/css"href="rgs.css"></link>
<meta charset="UTF-8">
<title>Log-In</title>
<h1 class="h" align="center">Login here</h1>
</head>
<body id="b">
<div id="d">
<form action="login.php"method="POST"align="center">
<center>
<img src="65-652991_login-button-svg-clip-arts-transparent-background-login.png"class="img"></img></center>

<b>
<br>
<label>User-Email</label>
<input name="email"type="email"id="form"placeholder="Enter Your Email"required></input>
<br></br>
<label>User-Password</label>
<input name="pass"type="password"id="form"placeholder="Enter Your Password"required></input>
<br>

<input name="login"type="submit"id="button"value="Log-In"></input>
<a href="rgs.php"><input name="rgs"type="button"id="button"value="Registration"></input>
<br>

</form>
<?php

if(isset($_POST['login']))
{
	
$email=$_POST['email'];	
$pass=$_POST['pass'];
	

$query="select*from ticket where email='$email' AND pass='$pass' ";

$check=mysqli_query($con,$query);
	
	if($check){
		
	if(mysqli_num_rows($check)>0){
		
		echo"
		<script>
		alert('You are Successfully Logged In');
		window.location.href='home.php';
		</script>
		
		
		";
		
	}else{
		
		echo"
		<script>
		alert('You are not registered');
		window.location.href='rgs.php';
		</script>
		
		
		";
		
	}	
		
	}else{
		
		echo"
		<script>
		alert('Database Error');
		window.location.href='login.php';
		</script>
		
		
		";
		
	}
	
}else{
	

	
}

?>
</div>
</body>
</html>