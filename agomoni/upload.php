<?php
session_start();
if(isset($_POST['submit']))
{
    $con=mysqli_connect('localhost','root','');
if($con){
echo"";

}
else{
echo"not connect";

}
mysqli_select_db($con,'u191935016_agomonidata');


$user_name=$_SESSION['user'];
$caption=$_POST['caption'];
// $img=$_SESSION['fullimage'];
date_default_timezone_set('Asia/Kolkata');
    $da=date('Y-m-d');
    $ta=date('h:i:s A');


$image=$_FILES['image']['name'];
$temp=$_FILES['image']['tmp_name'];

//  $saveimg="$user_name";
//  $saveimg .= "$ta";
//  $saveimg .="$image";

//   $file_path = "uploads/"; 
$newfile = date('_mdYHis_');
$filename = $user_name.$newfile.$image;
 
move_uploaded_file($temp,"uploads/$filename");






// $qy="INSERT INTO `login`(`Rollno`, `Name`, `Email`, `City`, `Number`, `Standerd`,`Image`) 
// VALUES ('$Rollno','$Name','$Email','$City','$Number','$Standerd','$Image')";

$qy="INSERT INTO `db_gallery`( `user_name`, `user_image`, `caption`, `image`, `date`, `time`, `strong`, `support`, `empathy`, `good`, `prime`) VALUES ('$user_name',1,'$caption','$filename','$da','$ta',0,0,0,0,0)";

// INSERT INTO `db_gallery`(`id`, `user_name`, `user_image`, `caption`, `image`, `date`, `time`, `strong`, `support`, `empathy`, `good`, `prime`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12])

mysqli_query($con,$qy);

?>
<script>
alert('image uploaded successfully');
window.open('agomonigallery1.php','_self');
</script>
<?php
}








?>





