<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];
if(isset( $_POST['message']))
$message = $_POST['message'];


$content="From: $name \n Email: $email \n Message: $message";
$recipient = "manujrajaram@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo '<script type="text/javascript">';
echo 'alert("Thanks for Contacting Us!");';
echo 'window.location= "https://alumneye.000webhostapp.com/contact.html";';
echo '</script>';
?>