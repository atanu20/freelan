<?php
session_start();
// header('location:Agomonihomefull.php');
$con=mysqli_connect('localhost','root','');
if($con){
    ?>

    <script>
    // alert('database is connected');
    
    </script>
    
    <?php

}
else{
echo"not connect";

}
mysqli_select_db($con,'u191935016_agomonidata');


$username =  mysqli_real_escape_string($con,$_POST['username']);
    
    $password =  mysqli_real_escape_string($con,$_POST['password']);
    $email =  mysqli_real_escape_string($con,$_POST['email']);
    // $cpassword =  mysqli_real_escape_string($con,$_POST['cpassword']);

    // $pass=password_hash($password,PASSWORD_BCRYPT);
    // $cpass=password_hash($cpassword,PASSWORD_BCRYPT);
    
     $pass=md5($password);
    
    
    $q="select * from users where  (username='$username')";

   $result=mysqli_query($con,$q);

	$num=mysqli_num_rows($result);
	
	if($num == 1)
{
    
    ?>

    <script>
    alert('username already exist');
    window.open('Agomonihomefull.php','_self');
    </script>
    
    <?php
    
  
    
}
else{

$qy="insert into users (username,password,email) values('$username','$pass','$email')";

mysqli_query($con,$qy);
?>


<script>
    alert('data insert successfully');
    window.open('Agomonihomefull.php','_self');
    </script>

    <?php





}







?>













