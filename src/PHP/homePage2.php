<?php 
require('connectFordB.php');

$query = 'SELECT * FROM posts';

// Get Result
$result = mysqli_query($connect, $query);

// Fetch Data
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($users);