<?php include('dbConnection.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>medical site | sign-up</title>


		<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>

		<link rel="stylesheet" href="css/FormStyle.css">


	</head>


	<?php 
		if(isset($_POST['submit'])){
			
			global $connection;
			
			$username = $_POST['username'];
			$password = $_POST['password'];
			$mail = $_POST['email'];

			if(empty($username) || empty($password) || empty($mail)){
				$msg = "Please fill out all feilds with valid data ";	
			}else{
			
				$query = "INSERT INTO user (`username`,`email`, `password`) Values ('{$username}', '{$mail}','{$password}')";
				
				$result = mysqli_query($connection, $query);
				if($result){
					$_SESSION['username'] = $username;
					header("Location: index.php");
				}
			}
			mysqli_close($connection);
		}
			
	?>
	<body>
		<div class="login-wrap">
			<div class="login-html">
				<h1> sign-up </h1>
	
				<?php 
					if(isset($msg)){
						echo "<p style='color:red'>" . $msg . "</p>";
					}
				?>
				<br />
				<div class="login-form">
					<div class="sign-up-htm">
					<form method="post" action="signup.php">
						<div class="group">
							<label for="user" class="label" required>Username</label>
							<input id="user" type="text" class="input" name="username">
						</div>
						<div class="group">
							<label for="pass" class="label" required>Password</label>
							<input id="pass" type="password" class="input" name="password">
						</div>
						<div class="group">
							<label for="mail" class="label" required>Email Address</label>
							<input id="mail" type="text" class="input" name="email">
						</div>
						<br />
						<div class="group">
							<input type="submit" class="button" value="Sign Up" name="submit">
						</div>
						<hr>
						<p style="color:white"> Have already an account ? <a href="login.php" style="color:red"> Login </p>
					</form>
					</div>
				</div>
			</div>
		</div>


	</body>
</html>
