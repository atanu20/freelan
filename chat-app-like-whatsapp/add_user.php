<?php
session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'chat-app');

$u_email=$_SESSION['user'];
$u_name=$_SESSION['user_name'];
$id=$_GET['id'];

$upd="SELECT * FROM `add_contact` WHERE email_user='$u_email' AND add_number='$id' ";
$quer=mysqli_query($con,$upd);
$nums=mysqli_num_rows($quer);
if($nums)
{
    ?>
    <script>
    
    alert( "This User Already Present In Your Contact List");
    window.location.href="chat.php";
    </script>

    <?php
}
else
{
    $qy="insert into add_contact (email_user,add_number) values('$u_email','$id')";

mysqli_query($con,$qy);
    ?>

<script>
    
    alert( "This User Added Successfully In Your Contact List");
    window.location.href="chat.php";
    </script>


    <?php
}

// echo '<script>window.location.href = "chat.php";</script>';

?>