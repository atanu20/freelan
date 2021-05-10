<?php
$con=mysqli_connect('localhost','root','','u191935016_agomonidata');


$uname=$_SESSION['user'];
$upas=$_SESSION['pas'];



// $all=date("Y-m-d h-i-s");
$sequery="SELECT * FROM `user_info` where (username='$uname') ";
$query=mysqli_query($con,$sequery);
$nums=mysqli_num_rows($query);
if($nums==0)
{
  ?>
  <div class="upd">
  <h3>pls update your profile</h3>
<a href="agomoni_update_profile.php">click here</a>
  </div>

  <?php
}
else{



while($data= mysqli_fetch_array($query))
{
 ?>



        <img src="img/<?php echo $data['image']; ?>.png" style="height: 40%;width: 30%; align-content: center">
      <h3><b>Username</b>:  <?php echo $_SESSION['user']; ?> </h3>
      <h3><b>Name</b>: <?php echo $data['name']; ?></h3>




      <?php


    }
  }
    
    ?>

       </div>


       <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
       <h2> Your All Feed Back:- </h2>
       <hr class="w-50">
       <?php
$con=mysqli_connect('localhost','root','','u191935016_agomonidata');
if($con){
?>
<script>
// alert("connected successfully");
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

$uname=$_SESSION['user'];


// $all=date("Y-m-d h-i-s");
$sequery="SELECT * FROM `db_posts` where user_name='$uname' ";
$query=mysqli_query($con,$sequery);
$nums=mysqli_num_rows($query);

while($data= mysqli_fetch_array($query))
{
 ?>



        <h5>=>  <?php echo $data['post']; ?> ( on <?php echo $data['date']; ?>)   </h5>
       




 <?php


}


?>