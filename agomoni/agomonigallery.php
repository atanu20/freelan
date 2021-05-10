
<?php
session_start();
if(!isset($_SESSION['user']))
{
  
header('location:Agomonihomefull.php');

}

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
<title>agomoni-gallery</title>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="shortcut icon" type="image/jpg" href="img/logo.jpeg">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script type="text/javascript" src="turning.min.js"></script>
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
.col-lg-4{
        padding-bottom: 60px;
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
button{
        border-radius: 50px;
         height: 50px;
         width: 50px;
    }
.checked {
    color: #ff7e84;
    }
.b1{
    padding: 20px;
    }
    .image{
      width:300px;
      height:350px;
    }
</style>
    <div class="row" style="background-color: #1c3048;">
              <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1" align="right">
              <a href="Agomonihomefull.php"><img src="img/White.png" style="height: 80px;width: 90px;" style="padding-top: 25px;"></a>
              </div>
              <a href="Agomonihomefull.php">
              <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
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
          <li><a href="agomoni_notepad1.php">Notepad</a></li>
          <li><a href="agomoni_notepad1.php">Dashboard</a></li>
          <li><a href="#section3">Gallery</a></li>
          <li><a href="agomoni_ContactUs1.php">Contact Us</a></li>
          <li><a href="agomoni_profile.php">My Account</a></li>
          <li><a href="agomoni_emergency_contacts.php">Emergency Contact</a></li>
          <li><a href="logout.php" class="">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
 </nav> 
    <div id="section3" class="container-fluid" style="padding-top: 60px;padding-bottom: 60px;">
    <div>
           <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-4">
                <img src="img/im1.jpeg"  class="image"><br><br>
                
              </div>
              <div class="col-sm-12 col-md-6 col-lg-4">
                <img src="img/im2.jpeg"  class="image"><br><br>
                
              </div>
              <div class="col-sm-12 col-md-6 col-lg-4">
                <img src="img/im3.jpeg" class="image"><br><br>
                
              </div>
           </div>
       </div>
        <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-4">
                <img src="img/im4.jpeg" style="padding-left: ;height: 100%;width: 100%;"><br><br>
                
              </div>
              <div class="col-sm-12 col-md-6 col-lg-4">
                <img src="img/im5.jpeg" style="padding-left: ;height: 100%;width: 100%;"><br><br>
               
              </div>
              <div class="col-sm-12 col-md-6 col-lg-4">
                <img src="img/im6.jpeg" style="padding-left: ;height: 100%;width: 100%;"><br><br>
                
              </div>
           </div>
           <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-4">
                <img src="img/im7.jpeg" style="padding-left: ;height: 100%;width: 100%;"><br><br>
                
              </div>
              <div class="col-sm-12 col-md-6 col-lg-4">
                <img src="img/im8.jpeg" style="padding-left: ;height: 100%;width: 100%;"><br><br>
                
              </div>
              <div class="col-sm-12 col-md-6 col-lg-4">
                <img src="img/im92.jpeg" style="padding-left: ;height: 100%;width: 100%;"><br><br>
                
              </div>
           </div>
       </div>
       </div>
     </div>
 </div>
 <button class="open-button" onclick="openForm()"><h4 style="color:white;"><b>Chat</b></h4></button>
    <div class="chat-popup" id="myForm">
    <form action="chat.php" method="post" class="form-container">
    <h1><b>Chat</b></h1>

    <label for="msg" style="color: white;"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required ></textarea>

    <!-- <button type="submit" class="btn">Send</button> -->
    <input type="submit" name="submit" value="Send" class="btn ">
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
</body>
</html>   