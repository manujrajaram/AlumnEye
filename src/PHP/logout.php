<?php

require('connectFordB.php');
unset($_SESSION['username']);
header('Location: http://localhost/INTP_project/Alumneye/src/html/index.html');

?>