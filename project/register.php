<?php
require 'dbconfig/config.php';
?>
<?DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#44bd32" >
	<form class="myform" action="register.php" method="post">
	<div id="main-wrapper">
		<center>
			<h2>Registration Form</h2>
		<img src="imgs/images2.jpg" class="avtar"/>
		</center>
	
		<label><b>Full Name:</b></label><br>
		<input name="fullname" type="text" class="inputvalues" placeholder="Type your fullname" required/><br>
		<label><b>Username:</b></label><br>
	    <input name="username" type="text" class="inputvalues" placeholder="Type your username" required/<br>
		
		<label><b>Password:</b></label><br>
		<input name="password" type="password" class="inputvalues" placeholder="Type your password" required/><br>
		<label><b>Confirm Password:</b></label><br>
		<input name="cpassword" type="password" class="inputvalues" placeholder="Confirm password" required/><br>
		<input name="submit_btn" type="submit" id="signup_btn" value="Sign Up" />
        <a href="index.php"><input type="button" id="back_btn" value="Back"/></a>
		
	</form>
	<?php	
		if(isset($_POST['submit_btn']))
		{
			$fullname=$_POST['fullname'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$cpassword=$_POST['cpassword'];
			if($password==$cpassword)
			{
				$query="select *from userinfo2 where username='$username'";
				$query_run=mysqli_query($con,$query);
				if(mysqli_num_rows($query_run)>0)
				{
					echo '<script type="text/javascript"> alert("User already exists. try another username")</script>';
				}
				else
				{
					$query="insert into userinfo2 values('','$username','$fullname','$password')";
					$query_run=mysqli_query($con,$query);
					if($query_run)
					{
						echo '<script type="text/javascript"> alert("User Registered..Go to login page to login")
						</script>';
					}
					else
					{
						echo '<script type="text/javascript"> alert("Error") </script>';
					}
				}
			
			}
			else
			{
				echo '<script type="text/javascript"> alert("password and confirm password does not match")</script>';
			}
		}
	?>	
</div>
	
</body>
</html>