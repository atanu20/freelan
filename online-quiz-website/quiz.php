<?php

session_start();
if(!isset($_SESSION['user']))
{
  header('location:index.php');
}

$el=$_SESSION['user'];

$uname = strstr($el, '@', true)


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Quiz Application</title>
    <link rel="stylesheet" href="style.css">
    <style>
        *{
            scroll-behavior: smooth;
        }
        
        .footer h3::after{
            content: " ";
            position: absolute;
            top:50px;
            left: 18%;
            width: 250px;
            height: 2px;
            background-color: rgb(238, 10, 181);
        }
        .footer .btn{
            background-color: rgb(238, 10, 181) ;
            color: white;

        }
        .footer ul{
            padding: 15px;
        }
        .footer ul li {
            list-style-type: none;
            display: block;
            
        }
        .footer ul li a{
            text-decoration: none;
            color:white;
        }
       

        marquee{
           
            font-size: 20px;
            color:white;
            font-weight: 600;
        }
        .col-bg{
            
            width: 100%;
            min-height: 35vh;
            background-color: steelblue;
            padding: 25px;
        }


.qu{
  margin-top: 150px;
  margin-bottom: 150px;
}
.shad{
    border: 1px solid grey;
    box-shadow: 1px 5px 5px 5px rgba(0,0,0,0.5);
}




#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
select {
    text-transform:capitalize;
}

    </style>
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="100">
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
        <div class="container">
        <a class="navbar-brand" href="main.php">
             <img src="img/logo.png" alt="logo" width="90px">
        </a>
        <div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
  <i class="fas fa-user pr-2"></i><?php echo $uname; ?>
  </button>
  <div class="dropdown-menu">
  <a class="dropdown-item" href="user_result.php">Result</a>
    <a class="dropdown-item" href="logout.php">Logout</a>
    <a class="dropdown-item" href="get_certificate.php">Certificate</a>
    <a class="dropdown-item" href="our_course.php">Our Courses</a>
    
  </div>
</div>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="quiz.php">Quiz</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="course.php">Courses</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="wholeresult.php">Results</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="main.php">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#blog">Blogs</a>
              </li>
            
              <li class="nav-item">
                <a class="nav-link" href="#faq">FAQs</a>
              </li>
            
          </ul>

          
        </div>
        
    </div>
</nav>

      <div class="container qu">
          <div class="row">
              <div class="col-md-6 col-12 mx-auto shad">
                  
                <form id="regForm" action="ans_qu.php" method="post">
                <!-- chooseexam.php  show_question.php-->
                    <h1>Give A Mcq Test:</h1>
                    <hr>
                    <br>
                    <div class="form-group">
    <label for="exampleFormControlSelect1">Example select:-</label>
    <select class="form-control" id="exampleFormControlSelect1" name="exam"  required>
      <option value="">select</option>

      <?php

      include "admin/connection.php";

      $sequery="SELECT * FROM `exam_category`";
$query=mysqli_query($con,$sequery);
$nums=mysqli_num_rows($query);

while($data= mysqli_fetch_array($query))
{
  ?>
  <option value="<?php echo  $data['category'] ?>"> <?php echo  $data['category'] ?></option>

  <?php
}



?>
     
    </select>
  </div>
  
  <input type="submit" name="search" class="btn btn-primary" value="Submit">
                   
                    <br><br>
                  <hr>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim quidem, laborum sunt nihil aperiam animi earum saepe, ex id labore voluptatem minima odit neque delectus? Placeat voluptatibus perferendis debitis ipsa.
                  
                  
                  </form>


                 

              </div>
          </div>
      </div>








<br><br>

<div class="footer bg-dark text-white text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-10 p-2 mx-auto ">
                <h3>Contact Us</h3>
                <br>
                <form action="/action_page.php">
                    <div class="form-group">
                      <label for="email">Email address:</label>
                      <input type="email" class="form-control" placeholder="Enter email" id="email">
                    </div>
                    <div class="form-group">
                      <label for="">Message:</label>
                      <textarea name="message" class="form-control" id="" placeholder="enter your message" rows="3"></textarea>
                    </div>
                   
                    <button type="submit"  class="btn  btn-block">Submit</button>
                  </form>

            </div>
            <div class="col-lg-4 col-md-6 col-10 p-2 mx-auto ">
                <h3>Download App</h3>

                <a href=""><img src="img/play-store.png" alt="" width="150px" class="m-5"></a>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, nisi.</p>
                
            </div>
            <div class="col-lg-4 col-md-6 col-10 p-2">
                <h3>Know More</h3>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Privacy Policy</a></li>
                    <li><a href="">Terms and condition</a></li>
                    <li><a href="">Start Quiz</a></li>
                    <li><a href="">Blog</a></li>
                </ul>
                
            </div>
        </div>
    </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        $(window).on("load",function(){
            setTimeout(function(){
                $('#myModal').modal('show');

            },5000);
        });
    </script>
   
  </body>
</html>