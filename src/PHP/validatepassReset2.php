<?php
$emptyfieldErr = $nomatchErr = "";
if (isset($_POST['newpass'], $_POST['confirmPass'])){
	$password = test_input($_POST['newpass']);
	$cpassword = test_input($_POST['confirmPass']);

	if ($password == $cpassword){
		if (strlen($password <= '8')){
    		$passwordErr = "Your Password Must Contain At Least 8 Characters!";
		}
		elseif(!preg_match("#[0-9]+#",$password)){
        	$passwordErr = "Your Password Must Contain At Least 1 Number!";
		}
		elseif(!preg_match("#[A-Z]+#",$password)){
    		$passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
		}
		elseif(!preg_match("#[a-z]+#",$password)){
    		$passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
		} 
	}else{
		$nomatchErr = "Password do not match please try again";
	}
}else{
	$emptyfieldErr = "Please fill both the fields"
}

function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>