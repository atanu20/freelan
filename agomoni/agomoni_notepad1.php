<?php
session_start();
if(!isset($_SESSION['user']))
{
header('location:Agomonihomefull.php');

}
// elseif(!isset($_SESSION['fullname']))
// {
//   header('location:agomoni_update_profile.php');
// }
// elseif(!isset($_SESSION['full']))
// {
//   header('location:agomoni_update_profile.php');
// }


?>


<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <script>
    function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Agomoni-notebook | dashboard </title>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="shortcut icon" type="image/jpg" href="img/logo.jpeg">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script type="text/javascript" src="jss/turning.min.js"></script>
</head>
<style>
  body{
    background-image: linear-gradient(145deg, #1c3048, #ff7e84);
    height: 100%;
  }
  .navbar{
    margin-bottom: 0px;
  }
  #section1,#section2,#section3,#section4{
    padding-bottom:50px;
  }
 .container-fluid {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
  .blur1{
    background-color: rgba(0,0,0,0);
  }
  q{
    color: white;
    padding-top: 160px;
    font-size: 20px;
  }
  li{
    color: white;
  }
  ::placeholder{
    color: white;
    font-size: 20px;
  }
  input[type=text]{
        height: 40px;
        width: 400px;
        padding-left: 20px;
        background-color: rgba(0,0,0,0.1);
        transition: none;
        color: white;
     }
      input[type=password]{
        height: 40px;
        width: 400px;
        padding-left: 20px;
        background-color: rgba(0,0,0,0.1);
        transition: none;
        color:white;
     }
     hr {
    height: 8px;
    padding-top: 1px;
    background-image: linear-gradient(90deg, yellow, transparent);
    margin-top: 0px;
    margin-bottom: 0px;
    border: 0;
    height: 1px;
}
h1,h2,h3,h4,h5,h6{
  color: white;
}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding-left: 5px;
  padding-top: 6px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: black;;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #838383;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #b6b6b6;
  outline: none;
  color:black;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
textarea
{
  max-width: 100%;
}

.bg{
  background:linear-gradient(120deg,red,green,yellow);
}

.container1{
  max-width: 500 !important;
  margin: auto;
  margin-top: 4%;
  font-family: sans-serif;
  letter-spacing: 0.5px;
  border-radius: 10px;
  background-color: #124559;
  }



.chat-page{
  padding: 0 0 50px 0;
}

.msg_inbox{
  border: 1px solid #ccc;
  overflow: hidden;
  padding-bottom: 30px;
}

.chats{
  padding: 30px 15px 0 25px;
}

.msg-page{
  height: 516px;
  overflow-y: auto;
}

.recieved-chats-img img{
  display: inline-block;
  width: 50px;
  float: left;
}

.recieved-msg{
  display: inline-block;
  padding: 0 0 0 10px;
  vertical-align: top;
  width: 92%;
}

.recieved-msg-inbox{
  width: 57%;
}

.recieved-msg-inbox p{
  background: #efefef none repeat scroll 0 0;
  border-radius: 10px;
  color:#646464;
  font-size: 17px;
  margin: 0;
  padding: 5px 10px 5px 12px;
  width: 100%;
}

.time{
  color: #777;
  display: block;
  font-size: 12px;
  margin: 8px 0 0;
}

.outgoing-chats{
  overflow: hidden;
  margin: 26px 20px;
}

.outgoing-chats-msg p{
  background: #5D8E7D none repeat scroll 0 0;
  color: #fff;
  border-radius: 10px;
  font-size: 17px;
  margin: 0;
  padding: 5px 10px 5px 12px;
  width: 100%;
}

.outgoing-chats-msg{
  float: left;
  width: 46%;
  margin-left: 45%;
}

.outgoing-chats-img img{
  display: inline-block;
  width: 50px;
  float: right;
}
.log-img img{
  width:40px;
  height:40px;
  border-radius:50%;
}
</style>
    <div class="row" style="background-color: #1c3048;">
              <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1" align="right">
                <a href="Agomonihomefull.php"><img src="img/White.png" style="height: 80px;width: 90px;" style="padding-top: 25px;"></a>
              </div>
              <a href="Agomonihomefull.php">
             <div class="col-xs-4 col-sm-6 col-md-9 col-lg-9">
                 <h2 style="color: #ff7e84;">agomoni</h2>
                 <h4 style="color: #ff7e84;">More than Family</h4>
              </div>
             </a>
           </div>
    <nav class="navbar navbar-inverse ">
        <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><b style="color:white">Discover Us:</b></a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
        <!-- <li><a href="agomoni_update_profile.php">Update Profile</a></li> -->
          <li><a href="#section1">Notepad</a></li>
          <li><a href="#section2">Dashboard</a></li>
          <li><a href="agomonigallery1.php">Gallery</a></li>
          <li><a href="agomoni_ContactUs1.php">Contact Us</a></li>
          <li><a href="agomoni_profile.php">My Account</a></li>
          <li><a href="agomoni_emergency_contacts.php">Emergency Contact</a></li>
          <li><a href="logout.php" class="">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
 </nav> 
    <div id="section1" class="container-fluid" style="padding-top: 60px;padding-bottom: 60px;">
    <div class="row">
      <div class="container">
        <h2 align="center" style="color:#ffb605;padding-bottom: 10px;">Notepad</h2>
        <h4 style="padding-bottom: 40px;padding: 20px; color: #d3d3d3;">Whatever you write in this Notepad will be displayed in the Dashboard anonymously.So feel free to write anything you want without any fear of you identity being disclosed.</h4>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
        <form  action="notepad.php" method="post">
        <textarea name="written" style="padding-left: 5px; background-color: #1c3048;border: 3px solid gray;color: white;font-size: 18px;" rows="12" cols="65"  placeholder="Enter your review" required ></textarea>
        <div>
        <button style="background-color: #ff979c;color:#1c3048;border-radius: 20px;height: 40px;width: 130px;outline: none;"><b>Submit</b></button>
        <!-- <button class="btn btn-primary">Submit</button> -->
        
        
        </form>
      </div>
     </div>
   </div>
   </div>
 </div>
   


<section id="section2">

<br><br><br>
 <div class="container container1" >
    <div class="chat-page">
      <div class="msg-inbox">
        <div class="chats">
          <div class="msg-page">


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

// $all=date("Y-m-d h-i-s");
$sequery="SELECT * FROM `db_posts` order by id asc LIMIT 300";
$query=mysqli_query($con,$sequery);
$nums=mysqli_num_rows($query);

while($data= mysqli_fetch_array($query))
{
  if(  $data['user_name']  != $_SESSION['user'] )
  {
    ?>

<div class="recieved-chats">
              <div class="recieved-chats-img log-img">
              <?php
$namm= $data['user_name'];
              $sequery2="SELECT * FROM `user_info` where (username='$namm')";
              $query2=mysqli_query($con,$sequery2);
              $nums2=mysqli_num_rows($query2);
              while($datt= mysqli_fetch_array($query2))
              {
                ?>

<img src="img/<?php echo $datt['image']; ?>.png">
<?php
              }

              ?>
                
                <!-- <img src="img/White.png"> -->
              </div>
            <div class="recieved-msg">
              <div class="recieved-msg-inbox">
                <p><?php echo $data['post']; ?></p>
                <span class="time"><?php echo $data['date']; ?></span>
                <br>
              </div>
            </div>
            </div>




    <?php

  }
 else{
   ?>


<div class="outgoing-chats">
              <div class="outgoing-chats-img log-img">
              <?php
$nam=$_SESSION['user'];
              $sequery1="SELECT * FROM `user_info` where (username='$nam')";
              $query1=mysqli_query($con,$sequery1);
              $nums1=mysqli_num_rows($query1);
              while($dat= mysqli_fetch_array($query1))
              {
                ?>

<img src="img/<?php echo $dat['image']; ?>.png">
<?php
              }

              ?>
                
              </div>
              <div class="outgoing-chats-msg">
                <p><?php echo $data['post']; ?></p>
                <span class="time"><?php echo $data['date']; ?></span>
                <br>
              
            </div>
            </div>



<?php
 }




 

 


}


?>






            


            
            
            
          </div>
        </div>
      </div>
    </div>
 </div>





 </section>











 
 

<br><br><br><br>


<button class="open-button" onclick="openForm()"><h4 style="color:white;"><b>Chat</b></h4></button>
    <div class="chat-popup" id="myForm">
    <form action="chat.php" method="post" class="form-container">
    <h1><b>Chat</b></h1>

    <label for="msg" style="color: white;"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required ></textarea>
    <input type="submit" name="submit" value="Send" class="btn ">
    <!-- <button type="submit" class="btn">Send</button> -->
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
</body>
</html>   



