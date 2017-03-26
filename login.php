<?php session_start(); ?>
<?php include('dbConnection.php'); ?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Medical site | Login </title>
  
  
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="css/FormStyle.css">

  
</head>

<?php 
	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if(empty($username) || empty($password)){

			$msg = "Please enter Your Data";
		}

		global $connection; 
		
		$query = "SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}' LIMIT 1";
		$result = mysqli_query($connection, $query);
		if($user = mysqli_fetch_assoc($result)){
			$_SESSION['username'] = $user['username'];
			header("Location: index.php");
		}
		else{
			$msg = "Incorrect UserName or Password ";
		}
	}
?>
	<body>
	  <div class="login-wrap">
		<div class="login-html">
		<h1> Login </h1>
		<?php

			if(isset($msg)){
				echo "<p style='color:red'> {$msg} </p>";
			}

		?>
		<br />
			<div class="login-form">
				<div class="sign-in-htm">
				<form method="post" action="login.php">			
					<div class="group">
						<label for="user" class="label">Username</label>
						<input id="user" type="text" class="input" name="username">
					</div>
					<div class="group">
						<label for="pass" class="label">Password</label>
						<input id="pass" type="password" class="input" data-type="password" name="password">
					</div>
					<div class="group">
						<br />
						<br />
						<input type="submit" class="button" value="Sign In" name="submit">
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