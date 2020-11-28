<html>
	<form action="admin_delete.php" method="POST">
		Enter Username: <input type="text" name="username">
		<input type="submit" name="submit" value="Delete">
	</form> 
</html>

<?php
require('connectFordB.php');
if (isset($_POST['username'])){
	$username = $_POST['username'];
	$deletequery = " DELETE FROM users WHERE username = '$username' ";
	$exedelquery = mysqli_query($connect, $deletequery);
	if ($exedelquery){
		echo "Record deleted Sucessfully";
		echo "<br/>";
		echo "<a href='admin_panel.php'>Click here</a> to return to main page.";
	}
	else{
		echo "Error in Query processing";
	}
}


?>