<?php
$emailErr = $phoneErr = $emptyfieldErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$email = test_input($_POST['eMail']);
	$phone = test_input($_POST['phone']);
	if ($email){
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$emailErr = "Invalid email format";
		}
	}
	elseif ($phone){
		if (strlen((string)$phone > 10)){
			$phoneErr = "Mobile number should not exceed 10 digits";
		}
	}
	else{
		$emptyfieldErr = "Please fill either email field or mobile number field";
	}
}

function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>