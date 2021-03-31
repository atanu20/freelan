<?php

session_start();
if(!isset($_SESSION['user']))
{
header('location:login.php');

}
$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'chat-app');

$u_email=$_SESSION['user'];
$u_name=$_SESSION['user_name'];

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Add Your Favourite Person</title>
    <style>
    *{
        margin:0;
        padding:0;
        
    }
    tr{
        text-align:center;
    }
    
    tr td img{
        width:100px;
        height:100px;
       
        border-radius:50%;
    }
    </style>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-light bg-success">
  <a class="navbar-brand" href="chat.php">ADDFavP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="#">Chat Now</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Contact Us</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0" action="" method="post">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container">
  <h2>Black/Dark Table</h2>
  <p>The .table-dark class adds a black background to the table:</p>            
  <table class="table table-dark">
    <thead>
      <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Operation</th>
      </tr>
    </thead>
    <tbody>
    <?php

$sequer="SELECT * FROM `users` WHERE (email!= '$u_email')  ";
$quer=mysqli_query($con,$sequer);
$nums=mysqli_num_rows($quer);


while($value= mysqli_fetch_array($quer))
{
 

    ?>

<tr>
        <td>
        
        <img src="imgg/<?php echo $value['image']  ?>" alt="">
        </td>
        <td><?php echo $value['name']  ?></td>
        <td>
        <a href="add_user.php?id=<?php echo $value['phone']  ?>" class="btn btn-success">Add Contact</a>
        
        </td>
      </tr>

    <?php
}

      
      ?>
      
    </tbody>
  </table>
</div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>