<?php

session_start();

$el=$_SESSION['user'];

if(isset($_POST['download']))
{


$cart=$_POST['pro'];

include "admin/connection.php";



$sequery="SELECT * FROM `register` WHERE email='$el'";
$query=mysqli_query($con,$sequery);
while($data= mysqli_fetch_array($query))
{
    $fullnamme=$data['name'];
   
}

// header('content-type:image/jpeg');
$font="BRUSHSCI.TTF";
$image=imagecreatefromjpeg("certificate_demo.jpg");
$color=imagecolorallocate($image,19,21,22);
$name=$fullnamme;
imagettftext($image,50,0,250,260,$color,$font,$name);
date_default_timezone_set('Asia/Kolkata');
$date=date('Y-m-d');
imagettftext($image,20,0,195,445,$color,"AGENCYR.TTF",$date);
$for="For ".$cart." quiz";
imagettftext($image,20,0,205,355,$color,"AGENCYR.TTF",$for);
$com="WWF";

imagettftext($image,20,0,485,445,$color,"AGENCYR.TTF",$com);
// imagejpeg($image);
imagejpeg($image,"cer/$name.jpg");

$output="cer/$name.jpg";

header('Content-Description: File Transfer');
header('content-Type:application/image');
header('Content-Disposition: attachment; filename= "' .basename($output).'"  ');
header('Content-Length: ' .filesize($output));
readfile($output);


// imagedestroy($image);
header('location:main.php');
}
?>