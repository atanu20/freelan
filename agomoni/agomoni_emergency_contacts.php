<?php
session_start();
if(!isset($_SESSION['user']))
{
header('location:Agomonihomefull.php');

}


?>

<html>
    <head>
        <script>
          function openForm() {
              document.getElementById("myForm").style.display = "block";
            }

            function closeForm() {
              document.getElementById("myForm").style.display = "none";
            }
        </script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->
        <link rel = 'stylesheet' href = 'csss/agomoni_emergency_custom.css'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


        
<style>
        #ngo{
          width:150px;
          padding:10px;
          background-color:pink;
          outline:none;
          border:none;
        border-radius:15px;
        }
        #ngo:focus{
          background-color:pink;
          border-radius:15px;
        }
        .flip-card {
  background-color: transparent;
  width: 280px;
  height: 320px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color:transparent;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
        .fa-quote-left{
          color:orange;
          font-size:25px;
        }
        .flip-card-front p{
          padding:10px;
          color:white;
          font-size:12px;
        }
        .flip-card-front h5{
          color:white;
        }
        /* .hrr{
          width:50%;
          height:2px;
          border:none;
          background:white;
          margin:auto !important ;
        } */
        </style>
    
    </head>
    <body>
      <div class="row container-fluid" style="background-color: #1c3048;">
        <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1" >
          <img src="img/White.png" style="height: 80px;width: 90px;" style="padding-top: 25px;">
        </div>
        <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
           <h2 style="color: #ff7e84;">agomoni</h2>
           <h4 style="color: #ff7e84;">More than Family</h4>
        </div>
     </div>
     <nav class="navbar navbar-expand-lg navbar-dark container-fluid my-nav">
      <a class="navbar-brand" href="#" style="color: white;">Emergency Contacts:</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="agomoni_notepad1.php" style="font-size: 14px;">Notepad</a>
          <a class="nav-link" href="agomoni_notepad1.php" style=" font-size: 14px;">Dashboard</a>
          <a class="nav-link" href="agomonigallery1.php" style=" font-size: 14px;">Gallery</a>
         
          <a class="nav-link" href="agomoni_ContactUs1.php" style=" font-size: 14px;">Contact us</a>
          <a class="nav-link" href="agomoni_profile.html" style=" font-size: 14px;">My Account</a>
          <a class="nav-link" href="agomoni_emergency_contacts.php" style=" font-size: 14px;">Emergency Contact</a>
          <a class="nav-link" href="logout.php" style=" font-size: 14px;">Logout</a>

          <!-- <li><a href="#section1">Notepad</a></li>
          <li><a href="#section2">Dashboard</a></li>
          <li><a href="agomonigallery1.php">Gallery</a></li>
          <li><a href="agomoni_ContactUs1.php">Contact Us</a></li>
          <li><a href="agomoni_profile.php">My Account</a></li>
          <li><a href="agomoni_emergency_contacts.php">Emergency Contact</a></li>
          <li><a href="logout.php" class="">Logout</a></li> -->

        </div>
      </div>
    </nav>
  <br>
    

    <form action=""  method="post">
          <label for="ngo" class="text-white">Emergency Contact:</label>
          <br>
          <select name="ngo" id="ngo">

<?php
$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'u191935016_agomonidata');

// $sequery1="SELECT * FROM `db_ngo` ";
$sequery1="select distinct category from db_ngo";
$query1=mysqli_query($con,$sequery1);
$nums1=mysqli_num_rows($query1);
while($dat= mysqli_fetch_array($query1))
{?>

<option value="<?php echo $dat['category']; ?>"><?php echo $dat['category']; ?></option>

<?php
}



?>




            <!-- <option value="Relief Work">Relief Work</option> -->
            <!-- <option value="Children">Children</option>
            <option value="NGO">NGO</option> -->
            
          </select>
          <br><br>
          <input type="submit" id="btnone" name="submit" value="Search" class="btn btn-primary">
</form>
<br>
<?php
    $con=mysqli_connect('localhost','root','');

    mysqli_select_db($con,'u191935016_agomonidata');
    
    if(isset($_POST['submit']))
    {
      $ngo=$_POST['ngo'];
      
      $q="select * from db_ngo where  (category='$ngo')";
      // $q="select * from db_ngo where category LIKE '%{$ngo}%' ";
      $query=mysqli_query($con,$q);
      $nums=mysqli_num_rows($query);
      if($nums==0)
      {
        ?>
        <script>
          alert("no data present");
        </script>
      
        <?php
      }
      else{
      ?>
        <h2 style="color:white;">ALL <?php echo $ngo; ?></h2>
        
        <?php
    }
  }
    ?>
              
<br>
<div class="container">
  <br>
  
  <div class="row">
    <?php
    $con=mysqli_connect('localhost','root','');

    mysqli_select_db($con,'u191935016_agomonidata');
    
    if(isset($_POST['submit']))
    {
      $ngo=$_POST['ngo'];
      
      $q="select * from db_ngo where  (category='$ngo')";
      // $q="select * from db_ngo where category LIKE '%{$ngo}%' ";
      $query=mysqli_query($con,$q);
      $nums=mysqli_num_rows($query);
      if($nums==0)
      {
        ?>
        <script>
          alert("no data present");
        </script>
      
        <?php
      }
      else{
      
      
      
      while($data= mysqli_fetch_array($query))
      {
       ?>
       
<div class="col-lg-4 col-md-6 col-10 mx-auto">
              <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
              <i class="fa fa-quote-left"></i>
              <!-- <h5>Ngo For <?php echo $data['category']; ?></h5> -->
              
              <p >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia est, provident molestiae repellendus inventore quisquam .</p>
                <img src="ngo/<?php echo $data['image']; ?>" alt="Avatar" style="width:220px;height:180px;border-radius:10px; ">
               
                
              </div>
              <div class="flip-card-back">
                <br><br>
                <h3><?php echo $data['ngo_name']; ?></h3> 
                <p><?php echo $data['contact1']; ?></p> 
                <p><?php echo $data['contact2']; ?></p> 
                
              </div>
            </div>
          </div>
              </div>

        <?php
        }
    }
  }
    ?>
              

    

              
  </div>
  
</div>






      <!-- <script src = 'agomoni_emergency_script.js'></script> -->
      <button class="open-button" onclick="openForm()"><h4 style="color:white;"><b>Chat</b></h4></button>
      <div class="chat-popup" id="myForm">
      <form action="chat.php" method="post" class="form-container">
      <h1><b>Chat</b></h1>

      <label for="msg" style="color: white;"><b>Message</b></label>
      <textarea placeholder="Type message.." name="msg" required ></textarea>

      <input type="submit" name="submit" value="Send" class="btn ">
      <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
      </form>


      
    </body>
</html>