<?php 	
	$connection = mysqli_connect("localhost", "root", "", "hospital");
		if(mysqli_connect_errno()){
			die( "Connection Error" . mysqli_connect_error() . mysqli_connect_errno());
		}
		
?>