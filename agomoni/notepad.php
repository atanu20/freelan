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


$name =  $_SESSION['user'];
$pas =  $_SESSION['pas'];
$written=$_POST['written'];

    
    
    
   

date_default_timezone_set('Asia/Kolkata');
    $da=date('Y-m-d');
    $ta=date('h:i:s A');
   

// $qy="insert into notepad (name,pas,written,date) values('$name','$pas','$written',now())";
// INSERT INTO `db_posts`(`id`, `user_name`, `user_image`, `post`, `date`, `time`, `strong`, `support`, `empathy`, `good`, `report`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11])

$qy="insert into db_posts (user_name, user_image , post , date , time , strong, support, empathy, good, report) values ('$name',0,'$written','$da','$ta',0,0,0,0,0)";



mysqli_query($con,$qy);

?>
<script>
alert("Your message is added");
window.open('agomoni_notepad1.php','_self');

</script>






















