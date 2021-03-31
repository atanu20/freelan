<?php
session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'chat-app');
$email= $_SESSION['user'];
$up="UPDATE `users` SET `active_st`='off' WHERE email='$email' ";
$up_run=mysqli_query($con,$up);

session_destroy();

header('location:login.php');




?>
