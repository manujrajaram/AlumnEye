<?php

require('connectFordB.php');
unset($_SESSION['adminname']);
header('Location: http://localhost/src/html/adminlogin.html');

?>