<?php
session_start();
$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'u191935016_agomonidata');

if(isset($_POST['submit']))
{
$name =  $_SESSION['user'];
$msg=$_POST['msg'];



// echo $name . $dob . $gender . $avatar ;


$qy="insert into chatbox (name,msg,date) values ('$name','$msg',now())";


mysqli_query($con,$qy);
?>


<script>
 alert("Your message send successffuly. Thank You ! we will contact you shortly");
 
 window.open('agomonigallery1.php','_self');
 </script>

 <?php





}






?>