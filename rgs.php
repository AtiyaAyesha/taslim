<?php
include'config.php';




?>
<!DOCTYPE>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet"type="text/css"href="rgs.css"></link>
<meta charset="UTF-8">
<title>Registration</title>
<h1 class="h" align="center">Registration</h1>
</head>
<body id="b">
<div id="d">
<form action="rgs.php"method="POST"align="center">
<center>
<img src="register_banner.jpg"class="img"></img></center>
<b>
<label>User-Name</label>
<input name="name"type="text"id="form"placeholder="Enter Your Name"required></input>
<br>
<b>
<label>User-Email</label>
<input name="email"type="email"id="form"placeholder="Enter Your Email"required></input>
<br>
<label>User-Password</label>
<input name="pass"type="pass"id="form"placeholder="Enter Your Password"required></input>
<br>
<b>
<label>Confirm-Password</label>
<input name="cpass"type="password"id="form"placeholder="Confirm Your Password"required></input>

<input name="rgs"type="submit"id="button"value="Sign-Up"></input>
<a href="login.php"><input name="back"type="button"id="button"value="Back to Log-In"></input>
</form>

<?php

if(isset($_POST['rgs']))
{
	
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];

if($pass==$cpass){
	
	$query="select*from ticket where email='$email'";
	
	$query_check=mysqli_query($con,$query);
	
	if($query_check){
		
		if(mysqli_num_rows($query_check)>0){
			
			echo"
			<script>
			
			alert('Email Already in Use');
			window.location.href='login.php';
			
			</script>
			
			";
			
		}else{
			
       $insertion="insert into ticket values('$name','$email','$pass')";
	   $run=mysqli_query($con,$insertion);
	   
	   if($run){
		   
		   echo"
			<script>
			
			alert('You are Successfully Registered');
			window.location.href='home.php';
			
			</script>
			
			";
		   
		   }else{
			   
			   echo"
			<script>
			
			alert('Connection Failed');
			window.location.href='rgs.php';
			
			</script>
			
			";
		   
	   }
		
		}
		
	}else{
		
		echo"
			<script>
			
			alert('Database Error');
			window.location.href='rgs.php';
			
			</script>
			
			";
		
	}
	
}else{
	
	echo"
			<script>
			
			alert('Password $ Confirm-Password Does't match');
			window.location.href='rgs.php';
			
			</script>
			
			";
	
}
	
}else{
	
	
}




?>

</div>
</body>
</html>	
	