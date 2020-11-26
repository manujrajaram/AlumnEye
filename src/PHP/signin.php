<?php

require('connectFordB.php');
$username = $_POST['username'];
$password = $_POST['password'];

$query = " SELECT * FROM users WHERE username = '$username' ";
$exequery = mysqli_query($connect, $query);
$rows = mysqli_num_rows($exequery);

if (isset($_POST['sign-in'])){
	if ($rows == 0){
		echo '<script type="text/javascript">';
		echo 'alert("User not found!");';
		echo 'window.location= "https://alumneye.000webhostapp.com/index.html";';
		echo '</script>';
	}

	elseif($rows){
    	while($row = mysqli_fetch_assoc($exequery)){
    		$dbpassword= $row['password'];
    	}
    	if ($dbpassword != md5($password)){
			echo '<script type="text/javascript">';
			echo 'alert("Incorrect Password!");';
			echo 'window.location= "https://alumneye.000webhostapp.com/index.html";';
			echo '</script>';
    	}
    	else{
    		header("Location: https://alumneye.000webhostapp.com/homePage.html");
    	}
    }


}

?>