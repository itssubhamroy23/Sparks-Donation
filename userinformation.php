<?php

$connection = mysqli_connect('localhost','id20027682_userinfodata','?%>kKLpc*Y5PURXr','id20027682_sparksdonation');

mysqli_select_db($connection,"id20027682_sparksdonation");

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `userinfodata`(`user`,`email`,`message`) VALUES ('$user','$email','$message') ";

mysqli_query($connection,$query);

echo "MESSAGE SENT";

?>
