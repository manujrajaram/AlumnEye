<?php

require('connectFordB.php');
$query = " SELECT * FROM users ";
$exequery = mysqli_query($connect, $query);
$count = mysqli_num_rows($exequery);
echo "<br/>List of Users: ";
echo "<table border='1' style='border-collapse: collapse; width: 25%;'>";
echo "<tbody>";
echo "<tr>";
echo "<td>Username</td>";
echo "<td>Password</td>";
echo"<td>email</td>";
echo "</tr>";        

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
echo "</tbody>";
echo "</table>";
echo "<a href = 'admin_delete.php'>Delete</a>";

?>	