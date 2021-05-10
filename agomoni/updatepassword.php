<?php
session_start();
$con=mysqli_connect('localhost','root','','u191935016_agomonidata');
if($con){
?>
<script>
alert("connected successfully");
</script>
<?php
}
else{

?>
<script>
alert(" not connected ");
</script>
<?php

}

// echo  $_SESSION['id-name'];

// echo "SELECT * FROM `users` WHERE (id='$ids')";
// $quer="SELECT * FROM `users` WHERE (id='$ids')";
// $runner=mysqli_query($con,$quer);

// $arr=mysqli_fetch_array($runner);

if(isset($_POST['submit']))
{
$idupdate=$_POST['uid'];
$uname=$_POST['uname'];

$uemail=$_POST['uemail'];
$upass=$_POST['upass'];
$mdpass=md5($upass);

$qu="UPDATE users SET id=$idupdate,username='$uname',password='$mdpass',email='$uemail' WHERE id=$idupdate  ";

  $run=mysqli_query($con,$qu);

if($run)
{
?>
<script>
alert("Password change successfully");
window.open('Agomonihomefull.php','_self');
</script>
<?php
// header('location:Agomonihomefull.php');

}
else{

?>
<script>
alert("not update");
window.open('resetpass.php','_self');

</script>
<?php


}


}



?>


