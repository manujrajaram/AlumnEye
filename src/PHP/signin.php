<?php

require('connectFordB.php');
$username = $_POST['username'];
$password = $_POST['password'];

$query = " SELECT * FROM users WHERE username = '$username' ";
$exequery = mysqli_query($connect, $query);
$rows = mysqli_num_rows($exequery);

if (isset($_POST['sign-in'])){
	if ($rows == 0){
		echo "<script>alert('User not Found!')</script>";
	}
	else{
		while ($row = mysqli_fetch_assoc($exequery)){
			$dbpassword = $row['password'];
			if($dbpassword != md5($password)){
				echo "<script>alert('Incorrect Password!')</script>";
			}
		}
	}
}

?>