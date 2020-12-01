<?php
session_start();
$connect = mysqli_connect("localhost", "root", "");
mysqli_select_db($connect, "alumneye");

?>