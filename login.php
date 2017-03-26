<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Medical site | Login </title>
  
  
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="css/FormStyle.css">

  
</head>
<?php session_start(); ?>
<?php 	
	$connection = mysqli_connect("localhost", "root", "", "hospital");
	if(mysqli_connect_errno()){
		die( "not connected" . mysqli_connect_error() . mysqli_connect_errno() );
	}
?>


<?php 
	if(isset($_POST['submit']{
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$query = "SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}' LIMIT 1";
		$result = mysqli_connect($connection, $query);
		if($user = fetch_assoc_row()){
			$_SESSION['username'] = $user['userame'];
			header("Location: index.html");
		}
		else{
			header("Location: login.php");
		}
	}
?>
<body>
  <div class="login-wrap">
	<div class="login-html">
	<h1> Login </h1>
	<br />
		<div class="login-form">
			<div class="sign-in-htm">
			<form method="post" action="#">			
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<br />
					<br />
					<input type="submit" class="button" value="Sign In">
					<hr>
					<p style="color:white"> If you don't have an account <a href="signup.php" style="color:red"> sign up </a> now </p>
				</div>
			</form>
			</div>
		</div>
	</div>
  </div>				
				
</body>

</html>