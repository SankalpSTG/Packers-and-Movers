<?php
	session_start();
?>
<?DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#44bd32" >

	<div id="main-wrapper">
		<center>
			<h2>Home Page</h2>
			<h2>Welcome 
				<?php echo $_SESSION['username'] ?>
			</h2>
		<img src="imgs/images2.jpg" class="avtar"/>
		</center>
	
	
	<form class="myform" action="home.php" method="post">
		
		<div class="buttons">
		<p><button class="booking" id="booking_btn">Booking</button></p>
		<p><button class="fare" id="fare_btn">Estimate Fare</button></p>
		<p><button class="logout" name="logout" id="logout_btn">Log Out</button></p>
	
	</form>
	</div>
		
		
	</form>
	<?php 
	if(isset($_POST['logout']))
	{
		session_destroy();
		header('location:index.php');
	}
	?>
	</div>
	
</body>
</html>