<?php 
require('connectFordB.php');

if(isset($_POST['post-content'])){


$post= $_POST['post-content'];




$query = "INSERT INTO posts(post) VALUES ('$post')";
$exequery = mysqli_query($connect, $query);

}

echo "<script>window.location.href= ' http://localhost/src/html/homePage.php' </script>" 



?>