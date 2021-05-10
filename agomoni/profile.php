<?php
session_start();
$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'u191935016_agomonidata');

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$pas=$_SESSION['pas'];
$rname=$_POST['rname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$image=$_POST['image'];

// echo $name . $dob . $gender . $avatar ;

$q="select * from user_info where  (username='$name')";

$result=mysqli_query($con,$q);

 $num=mysqli_num_rows($result);
 
 if($num == 1)
{
 
 ?>

 <script>
 alert("user's profile already updated");
 window.open('agomoni_update_profile.php','_self');
 </script>
 
 <?php
 

 
}
else{

$qy="insert into user_info (username,name,dob,gender,image,prime) values('$name','$rname','$dob','$gender','$image',0)";

mysqli_query($con,$qy);
$_SESSION['fullname']=$rname;
?>


<script>
 alert("user's profile updated successfully");
 
 window.open('agomoni_notepad1.php','_self');
 </script>

 <?php





}


}



?>