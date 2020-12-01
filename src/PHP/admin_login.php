<?php

require('connectFordB.php');
$ausername = $_POST['adminname'];
$apassword = $_POST['password'];
$checkquery = " SELECT * FROM admin where a_username = '$ausername' ";
$execheckquery = mysqli_query($connect, $checkquery);
$rows = mysqli_num_rows($execheckquery);
if ($rows != 0) {
	while ($row = mysqli_fetch_assoc($execheckquery)){
		$dbpassword = $row['a_password'];
		if ($dbpassword == $apassword){
			$_SESSION['adminname'] = $ausername;
			header("Location: http://localhost/src/PHP/admin_panel.php");
		}
		else{
			echo "<script>alert('Incorrect password')</script>";
		}
	}
}
else{
	echo "<script>alert('Admin not found')</script>";
}

?>
