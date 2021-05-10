<?php
session_start();
include  "admin/connection.php";

if(isset($_POST['register']))
{




$name =  mysqli_real_escape_string($con,$_POST['name']);
    
    $password =  mysqli_real_escape_string($con,$_POST['password']);
    $email =  mysqli_real_escape_string($con,$_POST['email']);
   
    
     $pass=md5($password);
    
    
    $q="select * from register where  (email='$email')";

   $result=mysqli_query($con,$q);

	$num=mysqli_num_rows($result);
	
	if($num == 1)
{
    
    ?>

    <script>
    alert('username already exist');
    window.open('index.php','_self');
    </script>
    
    <?php
    
  
    
}
else{

$qy="insert into register (name,email,password) values('$name','$email','$pass')";

mysqli_query($con,$qy);
?>


<script>
    alert('data insert successfully');
    window.open('index.php','_self');
    </script>

    <?php



}

}







?>













