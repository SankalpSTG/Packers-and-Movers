<?php
	session_start();
	require 'dbconfig/config.php';
?>
<?DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#44bd32">
	<form class="myform" action="index.php" method="post">
	<div id="main-wrapper">
		<center>
			<h2>Login Form</h2>
		<img src="imgs/images2.jpg" class="avtar"/>
		</center>
	
	

		<label><b>Username:</b></label>
		<input type="text" name="username" class="inputvalues" placeholder="Type your username" required/><br>
		<label><b>Password:</b></label>
		<input name="password" type="password" class="inputvalues" placeholder="Type your password" required/><br>
		<input name="login" type="submit" id="login_btn" value="Login" /><br>
		<a href="register.php"><input type="button" id="register_btn" value="Register"/>
		
	</form>
	
	<?php
	if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		$query="select * from userinfo2 where username='$username' and password='$password'";
		
		$query_run=mysqli_query($con,$query);
		if(mysqli_num_rows($query_run)>0)
		{
			$_SESSION['username']=$username;
			header('location:home.php');
		
		}
		else
		{
			echo '<script type="text/javascript">alert("Invalid credentials") </script>';
		}
	}
	?>
	</div>
</body>
</html>