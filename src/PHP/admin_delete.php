<?php
error_reporting(0);
?>


<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Custom styles for this template -->
    <link  rel="stylesheet" href="../css/admin_delete.css">
    
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Delete User</title>
</head>
<body>
	<div class="container">
		<h1 class="display-4 mb-4 mt-5">List of Users</h1>
		<div class="text-center">
			<form class="form-delete" action="admin_delete.php" method="POST">
				<p class="mb-3 text-muted">Enter username to delete user</p>
				<input type="text" class="form-control" name="username" placeholder="Username">
				<input type="submit" class="btn btn-danger" name="submit" value="Delete">
			</form>
		</div>
		<table class="table table-striped table-dark" style="text-align: center;">
			<thead>
			<tr>
				<th scope="col">Username</th>
				<th scope="col">Password</th>
				<th scope="col">Email</th>
			</tr>
			</thead>
		
			<tbody>
				<?php

				require('connectFordB.php');
				$query = " SELECT * FROM users ";
				$exequery = mysqli_query($connect, $query);

				while($row = mysqli_fetch_assoc($exequery)){
				$username = $row['username'];
				$password = $row['password'];
				$email = $row['email'];
				echo "<tr>";
				echo "<td>$username</td>";
				echo "<td>$password</td>";
				echo "<td>$email</td>";
				echo "</tr>";
				}
				?>        
			</tbody>
		</table>
	</div>
</body> 
</html>

<?php
require('connectFordB.php');
if (isset($_POST['username'])){
	$username = $_POST['username'];
	$deletequery = " DELETE FROM users WHERE username = '$username' ";
	$exedelquery = mysqli_query($connect, $deletequery);
	if ($exedelquery){
		echo '<script type="text/javascript">';
		echo 'alert("Record Deleted Successfully");';
		echo 'window.location= "admin_panel.php";';
		echo '</script>';
		echo "<a href='admin_panel.php'>Click here</a> to return to main page.";
	}
	else{
		echo "Error in Query processing";
	}
}


?>