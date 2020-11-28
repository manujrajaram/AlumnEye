<?php 
require('connectFordB.php');

if(isset($_POST['post-content'])){


$post= $_POST['post-content'];




$query = "INSERT INTO posts(post) VALUES ('$post')";
$exequery = mysqli_query($connect, $query);

}





?>