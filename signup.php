<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>medical site | sign-up</title>
  
  
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="css/FormStyle.css">

  
</head>
<?php 	
	$connection = mysqli_connect("localhost", "root", "", "hospital");
		if(mysqli_connect_errno()){
			die( "not connected" . mysqli_connect_error() . mysqli_connect_errno());
		}
?>

<?php 
	if(isset($_POST['submit']{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$mail = $_POST['email'];
		$query = "INSERT INTO user (`username`, `password`, `email`) Values ('{$username}','{$password}', '{$mail}')";
		$result = mysqli_connect($connection, $query);
		if($result){
			$msg = "Thanks for register";
		}
		else{
			$msg = "Please enter fill all feilds with valid data ";	
		}
	}
		
?>
<body>
  <div class="login-wrap">
	<div class="login-html">
		<h1> sign-up </h1>
		<br />
		<div class="login-form">
			<div class="sign-up-htm">
			<form method="post" action="#">
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
					<input type="submit" class="button" value="Sign Up">
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
