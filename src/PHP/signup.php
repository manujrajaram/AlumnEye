<?php

require('connectFordB.php');
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['copassword'];

$checkquery = " SELECT username FROM users WHERE username = '$username' ";
$execheckquery = mysqli_query($connect, $checkquery);

$count = mysqli_num_rows($execheckquery);
if (count != 0){
	echo "<script>alert('Username already exists!')</script>";
}
else{
	if ($password == $confirmpassword){
		if (strlen($username)>25){
			echo "<script>alert('Username length should not be more than 25 characters!')</script>";
		}
		else{
			// encrypting passwords
			$password = md5($password);
			$confirmpassword = md5($confirmpassword);

			//Inserting values insisde the database
			$query = " INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email') ";
			mysqli_query($connect, $query);
			echo "<script>alert('You have been registered!')</script>";
		}	
	}
	else{
		echo "<script>alert('Passwords do not match!')</script>";
	}
}

?>