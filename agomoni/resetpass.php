<!DOCTYPE html>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1>Please Remember Your Password</h1>
    <p>Search your account by Email</p>
    <a href="Agomonihomefull.php" class="btn btn-warning">Back to Home</a>
  </div>
</div>
    <div class="container">
    <div class="row">
    <div class="col-md-6 col-10 mx-auto">
    <div class="card  text-white">
  <div class="card-header bg-success">
  Search Your password
  </div>
  <div class="card-body">
  <form action="" method="post">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email" id="email" required>
  </div>
  
  <input type="submit" class="btn btn-success" name="submit" value="Search">
</form>
  </div>
  
  
</div>
    
    </div>


    <div class="col-md-6 col-10 mx-auto">
   
  

<?php
    
$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'u191935016_agomonidata');

if(isset($_POST['submit']))
{
$email=$_POST['email'];


// echo $name . $dob . $gender . $avatar ;

$q="select * from users where  (email='$email')";

$result=mysqli_query($con,$q);

 $num=mysqli_num_rows($result);
 
 

while($data= mysqli_fetch_array($result))
{
    $_SESSION['id-name']=$data['id'];
 ?>

<div class="card">
<div class="card-header bg-info text-white">
  For Get New Password Update Your Account
  </div>

  <div class="card-body">
  <form action="updatepassword.php" method="post">
  <div class="form-group">
    <label for="idd">User Id:</label>
    <input type="text" class="form-control" name="uid" placeholder="Enter name" id="idd" readonly="readonly" value="<?php echo $data['id']; ?>" required>
  </div>
  <div class="form-group">
    <label for="name">Username:</label>
    <input type="text" class="form-control" name="uname" placeholder="Enter name" id="name" value="<?php echo $data['username']; ?>" required>
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="uemail" placeholder="Enter email" id="email" value="<?php echo $data['email']; ?>" required>
  </div>
  <div class="form-group">
    <label for="pass">Password:</label>
    <input type="text" class="form-control" name="upass" placeholder="Enter password" id="pass"  required>
  </div>
  
  <input type="submit" class="btn btn-success" name="submit" value="Update">
</form>
  </div>
  </div>
  
  
  </div>





 <?php


}


}



?>








    

    
       

    
    
    </div>
    </div>
</body>
</html>