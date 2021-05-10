<?php
session_start();
if(!isset($_SESSION['user']))
{
header('location:Agomonihomefull.php');

}
elseif(isset($_SESSION['full']))
{
  header('location:agomoni_notepad1.php');
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
    <title>agomoni-accountcreation(dashboard)</title>
    <link rel="shortcut icon" type="image/jpg" href="img/logo.jpeg">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script type="text/javascript" src="turning.min.js"></script>
</head>


<style>
    @font-face {
        src: url(Montez/montez.ttf);
        font-family: montez;
    }
    
    body {
        background-image: linear-gradient(145deg, #1c3048, #ff7e84);
        height: 100%;
    }
    
    .navbar {
        margin-bottom: 0px;
    }
    
    .outer {
        position: relative;
        background: url(back.png) no-repeat;
        background-size: cover;
        background-position: bottom center;
    }
    
    #section1,
    #section2,
    #section3,
    #section4 {
        padding-bottom: 50px;
        opacity: 100%;
    }
    
    .container-fluid {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }
    
    .blur1 {
        background-color: rgba(0, 0, 0, 0);
    }
    
    q {
        color: white;
        padding-top: 160px;
        font-size: 20px;
    }
    
    li {
        color: white;
    }
    
     ::placeholder {
        color: rgb(255, 255, 255);
        font-size: 20px;
    }
    
    input:focus {
        outline: none;
    }
    
    input[type=text] {
        margin-left: auto;
        margin-right: auto;
        height: 50px;
        border-color: #fa686f;
        font-size: 20px;
        border-radius: 25px;
        width: 400px;
        padding-left: 20px;
        padding-right: 20px;
        background-color: rgba(0, 0, 0, 0.1);
        transition: none;
        color: white;
    }
    
    input[type=date] {
        height: 50px;
        border-color: #fa686f;
        font-size: 20px;
        border-radius: 25px;
        width: 400px;
        padding-left: 20px;
        padding-right: 20px;
        background-color: rgba(0, 0, 0, 0.1);
        transition: none;
        color: white;
    }
    
    input[type=password] {
        height: 50px;
        border-radius: 25px;
        width: 400px;
        padding-left: 20px;
        background-color: rgba(0, 0, 0, 0.1);
        transition: none;
        color: white;
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
    
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        color: white;
    }
    
    * {
        box-sizing: border-box;
    }
    /* Button used to open the chat form - fixed at the bottom of the page */
    
    .open-button {
        background-color: rgb(73, 69, 69);
        border-radius: 20px;
        color: white;
        padding-left: 5px;
        padding-top: 6px;
        border: none;
        cursor: pointer;
        opacity: 0.8;
        position: fixed;
        bottom: 23px;
        right: 28px;
        width: 260px;
    }
    /* The popup chat - hidden by default */
    
    .chat-popup {
        display: none;
        position: fixed;
        bottom: 0;
        right: 15px;
        z-index: 9;
    }
    /* Add styles to the form container */
    
    .form-container {
        max-width: 300px;
        border-radius: 10px;
        padding: 10px;
        background-color: rgba(71, 70, 70, 0.5);
        ;
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
        color: black;
    }
    /* Set a style for the submit/send button */
    
    .form-container .btn {
        background-color: #4CAF50;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        margin-bottom: 10px;
        opacity: 0.8;
    }
    /* Add a red background color to the cancel button */
    
    .form-container .cancel {
        background-color: red;
    }
    /* Add some hover effects to buttons */
    
    .form-container .btn:hover,
    .open-button:hover {
        opacity: 1;
    }
    
    textarea {
        max-width: 100%;
    }
    
    img {
        height: 150px;
        width: 150px;
    }
    
    button {
        background-color: rgba(0, 0, 0, 0.1);
    }
    
    .button1:after {
        opacity: 0;
        transition: all 0.8s;
    }
    /*Agomoni heading*/
    
    .inner {
        padding: 50px;
    }
    
    .heading1 {
        color: #ff7e84;
        font-size: 60px;
        font-family: montez;
        margin-top: -5px;
    }
    
    .heading2 {
        color: #ff7e84;
        font-size: 25px;
        font-family: montez;
        margin-top: -3px;
        margin-left: 18px;
    }
    
    @media (min-width: 992px) {
        .col-lg-4 {
            float: right;
            width: 50%;
        }
    }
    
    .details {
        align-content: center;
        margin: 50px;
    }
    
    .avatar {
        position: relative;
        width: 100%;
        align-content: center;
        padding: 15px;
    }
    
    .avatar img {
        margin-left: auto;
        margin-right: auto;
        display: block;
    }
    
    .avatar h3 {
        margin-left: auto;
        margin-right: auto;
        display: block;
        text-align: center;
    }
    
    .image-grid {
        padding: 25px;
    }
    .img-val{
        display:none;
    }

    .box-input-at{
        margin-left:100px;
    }
</style>

<body>
    <div class="row" style="background-color: #1c3048;">
        <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
            <!-- <img src="White.png" style="height: 120px;width: 125px;" style="padding-top: 50px;"> -->
            <a href="Agomonihomefull.php"><img src="img/White.png" style="height: 80px;width: 90px;" style="padding-top: 25px;"></a>
        </div>
        <a href="Agomonihomefull.php">
        <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
            <h1 class="heading1">agomoni</h1>
            <h3 class="heading2">More than Family</h3>
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
                        <!-- <li><a href="#section1">Notepad</a></li>
                        <li><a href="#section2">Dashboard</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Contact Us</a></li> -->
                        <li><a href="agomoni_update_profile.php">Update Profile</a></li>
         <!-- <li><a href="agomoni_notepad1.php">Notepad</a></li> -->
         <!-- <li><a href="agomoni_notepad1.php">Dashboard</a></li>        
          <li><a href="agomonigallery1.php">Gallery</a></li>
          <li><a href="agomoni_ContactUs1.php">Contact Us</a></li>
          <li><a href="agomoni_profile.php">My Account</a></li>
          
          <li><a href="agomoni_emergency_contacts.php">Emergency Contact</a></li>-->
          <li><a href="logout.php" class="">Logout</a></li> 

                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <div id="section0" class="outer container-fluid">
        <!--  changes -->

<form action="profile.php" method="post">
        <div class="col-lg-4 inner">

            <div class="details">

                <div><input type="text" name="name" placeholder="Enter Username" value="<?php echo $_SESSION['user'] ?>" readonly="readonly" required><br><br>
                    <input type="text" placeholder="Enter Your Name" name="rname" required><br><br>
                    <input type="date" name="dob" placeholder="Enter Date of Birth" required>
                    <br><br>
                    <input type="text" name="image" placeholder="" value="1" required class="img-val" id="img-in"></div>
                <br><br>
                <div>
                    <h3><b>Gender : </b></h3>
                    <h4><input type="radio" name="gender" value="Male" required> Male</h4>
                    <h4><input type="radio" name="gender" value="Female" required> Female</h4>
                    <h4><input type="radio" name="gender" value="Transgender" required> Transgender</h4>
                    <h4><input type="radio" name="gender" value="Others" required> Others</h4>
                    <h4><input type="radio" name="gender" value="Prefer not to say" required> Prefer not to say<br><br>
                </div>
            </div>
        </div>

        <div class="col-lg-4 inner">

            <div class="avatar" id = 'av1'><img src="img/1.png" id="image">
                <h3 class="avatar">Choose your avatar</h3>
            </div>

            <br/>

            <div class="image-grid">
                <table>
                    <tr>
                        <td>
                            <button class="button1" id = 'one' onclick="select('1')"><img src="img/1.png"></button>
                            <button class="button1" id = 'two' onclick="select('2')"><img src="img/2.png"></button>
                            <button class="button1"id = 'three' onclick="select('3')"><img src="img/3.png"></button>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <button class="button1" id = 'four' onclick="select('4')"><img src="img/4.png"></button>
                            <button class="button1" id = 'five' onclick="select('5')"><img src="img/5.png"></button>
                            <button class="button1" id = 'six' onclick="select('6')"><img src="img/6.png"></button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <button class="button1" id = 'seven' onclick="select('7')"><img src="img/7.png"></button>
                            <button class="button1" id = 'eight' onclick="select('8')"><img src="img/8.png"></button>
                            <button class="button1" id = 'nine' onclick="select('9')"><img src="img/9.png"></button>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button class="button1" id = 'seven' onclick="select('10')"><img src="img/10.png"></button>
                            

                        </td>
                    </tr>

                </table>
            </div>
           
        </div>
        <div class="box-input-at">
        <input type="submit" id="btnone" name="submit" value="Update Profile" class="btn btn-primary">
        </div>
        

        <!-- <input type="submit" class="btn btn-primary p-5  " value="Update Profile"> -->
        </form>
    </div>
    <br><br><br><br>
    <script>
        function select(id){
            // var img = document.getElementById(id);
            // av1.innerHTML = img.innerHTML;
            // console.log(img)
            var image=document.getElementById("image");
            image.src="img/"+id+".png";
            // var imgval=document.getElementByClassName("img-val");
            // imgval.innerText=id;
            document.getElementById("img-in").value = id;
//             var va=document.getElementById("img-in").value;
// alert(va);
        }
    </script>


    <button class="open-button" onclick="openForm()"><h4 style="color:white;"><b,>Chat</b></h4></button>
    <div class="chat-popup" id="myForm">
        <form action="chat.php" class="form-container">
            <h1><b>Chat</b></h1>

            <label for="msg" style="color: white;"><b>Message</b></label>
            <textarea placeholder="Type message.." name="msg" required></textarea>

            <button type="submit" class="btn">Send</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
    </div>
</body>

</html>