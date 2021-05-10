<?php

session_start();
if(!isset($_SESSION['user']))
{
  header('location:index.php');
}

$el=$_SESSION['user'];

$uname = strstr($el, '@', true)


?>
<!-- <script>
var str = "ata@gmail.com;
  var a=str.indexOf("@");
  var res = str.substr(0, a);

  console.log("hi dear")

</script> -->






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

#quiz{
   margin-top: 60px;
   margin-bottom: 100px;
}

/* faq */
        



#accordion .card, #accordion .card-header{
    background-color: transparent !important;
    border: none !important;
    padding: 0 !important;
    margin-bottom: 20px;
    
    
   
    
}
#accordion .btn{
    background: white;
}
#accordion .card{
    box-shadow: 0 2px 25px 0 rgba(110,130,218,0.18);
    transition: transform 0.5s;
}
#accordion .card:hover{
    transform: scale(1.1);
}
/* .card:focus{
    outline: none !important;
    border: none !important;
} */
#accordion .btn-link{
    width: 100%;
    height: 60px;
    color:black;
    font-weight: bold !important;
    text-align: left !important;
    text-decoration: none !important;
    background-color: white;
    
    
}
/* .btn{
    border: none !important;
    outline: none !important;
} */
#accordion .card-body{
    background: #e8eeff;
}
#accordion .btn-link:after{
    content: '\2212';
    width: 35px;
    font-size: 25px;
    text-align: center;
    border-radius: 5px;
    right: 15px;
    top:25px;
    position: absolute;
    background: #e8eeff;

}
#accordion .btn-link.collapsed:after
{
    content: '\002B';
}
#accordion .btn-link:before
{
    content: ' ';
    height: 25px;
    width: 25px;
    position: absolute;
    background: white;
    z-index: 1;
    transform: rotate(45deg);
    left: 30px;
    top:60px;
}


.bg-box{
    background-color: #000000;
    color: white;
    padding: 10px;
    cursor: pointer;
    transition: 0.5s;
}
.bg-box i{
    font-size: 35px;
    

}
.bg-box:hover{
    transform: scale(1.05);
    background-color: crimson;
}
.title-box::before{
    content: " ";
    width: 100px;
    height: 5px;
    background: crimson;
    position: absolute;
    
   

}



/* overlauy  */

.image {
  display: block;
  width: 100%;
  
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color:crimson;
  overflow: hidden;
  width: 0;
  height: 100%;
  transition: .5s ease;
}

.page:hover .overlay {
  width: 98%;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  white-space: nowrap;
}
.page{
    padding: 10px;
}
.pad{
  margin-top: 100px;
  margin-bottom: 100px;
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
              <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
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
                <a class="nav-link" href="#services">Services</a>
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


<div class="container my-5" id="home">
    <br><br><br><br>
    <div class="row">
        <div class="col-lg-8 col-md-8 col-12 mx-auto p-2">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/1.jpg" alt="Los Angeles" width="1100" height="500">
                    <div class="carousel-caption">
                      <h3>Los Angeles</h3>
                      <p>We had such a great time in LA!</p>
                    </div>   
                  </div>
                  <div class="carousel-item">
                    <img src="img/2.jpg" alt="Chicago" width="1100" height="500">
                    <div class="carousel-caption">
                      <h3>Chicago</h3>
                      <p>Thank you, Chicago!</p>
                    </div>   
                  </div>
                  <div class="carousel-item">
                    <img src="img/3.jpg" alt="New York" width="1100" height="500">
                    <div class="carousel-caption">
                      <h3>New York</h3>
                      <p>We love the Big Apple!</p>
                    </div>   
                  </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>

        </div>
        <div class="col-lg-4 col-md-4 col-10 mx-auto p-2">
            <div class="card">
                <div class="card-header text-center bg-primary text-white">Recent Update</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                      </ul>
                </div> 
               
              </div>

        </div>
    </div>

    


</div>

<div class="container bg-dark text-white">
    <marquee behavior="" direction=""><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae accusantium voluptates fugit quibusdam dolore amet sint nesciunt dignissimos debitis, molestiae harum obcaecati quaerat! Itaque laborum eligendi quae culpa vel velit?</p></marquee>

</div>

<br><br><br><br>


<div class="container">

<div class="row">

<?php


include "admin/connection.php";
$sequery="SELECT * FROM `courses` LIMIT 3";
$query=mysqli_query($con,$sequery);
$nums=mysqli_num_rows($query);

while($data= mysqli_fetch_array($query))
{
?>
<div class="col-lg-4 col-md-6 col-12 mx-auto mb-2 ">
<div class="card" >
<img src="img/<?php  echo $data['image'] ?>" alt="" class="img-fluid " width="100%">
<div class="p-3">
<h3 ><?php  echo $data['title'] ?></h3>
<p><?php  echo $data['small_des'] ?></p>
<p>Duration: <?php  echo $data['duration'] ?></p>
</div>
<div class="card-footer">
<span class="text-danger">Rs: <?php  echo $data['price'] ?></span>
<a href="entroll.php?id=<?php  echo $data['id'] ?>" class="btn btn-primary float-right">Enroll Now</a>
</div>

</div>

</div>




<?php

}


?>


<div class="d-block m-auto ">
<br><br><br>

<a href="course.php" class="btn btn-success"> View More </a></div>





</div></div>




<div id="quiz">
    <div class="container text-center">
        <h2 class="title-box">Our Best Quiz</h2>
        <br><br>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-10 mx-auto page">
                <a href="">
                    <img src="img/bank.jpg" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">Best Quiz For Bank Exam  <br> Click here </div>
                 
                </div>
    
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-10 mx-auto page">
                <a href="">
                    <img src="img/ssc.jpg" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">Best Quiz For SSC Exam  <br> Click here</div>
                </div>
                </a>
    
            </div>
            <div class="col-lg-4 col-md-6 col-10 mx-auto page">
               <a href="">
                <img src="img/upsc.jpg" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">Best Quiz For Upse Exam  <br> Click here</div>
                </div>
               </a>
    
            </div>
        </div>
    </div>
</div>


<div class="col-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-10 mx-auto">
                <img src="img/QUIZ-3D.png" alt="" class="img-fluid">

            </div>
            <div class="col-md-6 col-10 mx-auto text-white">
                <h3>Gain Knowledge With Quiz Academy</h3>
                <h5>We Provide Best Questions for your test</h5>
                <p>So Start Yourself as a Knowledge Gainer</p>
                <p>Please Revice every Questions and answer</p>
                
            </div>
        </div>
    </div>

</div>
<div class="container text-center" id="services">
    <br><br>
    <h2 class="title-box">My services</h2>
    <br><br>
    <div class="row">
        <div class="col-lg-4 col-md-5 col-10 mx-auto text-center">
            <div class="card bg-box">
                <i class="fas fa-paint-brush"></i>
                       <h5> Web Design</h5>
                        <p>I am a professional Web Developer with a knowledge of various web development project.
                            </p>
                        
            </div>

        </div>
        <div class="col-lg-4 col-md-5 col-10 mx-auto text-center">
            <div class="card bg-box">
                <i class="fas fa-paint-brush"></i>
                       <h5> Web Design</h5>
                        <p>I am a professional Web Developer with a knowledge of various web development project.
                            </p>
                        
            </div>

        </div>
        <div class="col-lg-4 col-md-5 col-10 mx-auto text-center">
            <div class="card bg-box">
                <i class="fas fa-paint-brush"></i>
                       <h5> Web Design</h5>
                        <p>I am a professional Web Developer with a knowledge of various web development project.
                            </p>
                        
            </div>

        </div>
        


    </div>
</div>

<!-- <div class="container" id="quiz">
    <h3 class="text-success text-center">Our Best Quiz</h3>
    <hr>
    
    <div class="row mt-30">
        <div class="col-md-4 col-sm-6">
          <div class="box2">
            <img src="img/bank.jpg">
            <div class="box-content">
              <div class="inner-content">
                <h3 class="title">Give Quiz</h3>
                <span class="post">Bank Exam</span>
                <ul class="icon">
                  
                  <li><a href="#"><i class="fa fa-book" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="box2">
            <img src="img/ssc.jpg">
            <div class="box-content">
              <div class="inner-content">
                <h3 class="title">Give Quiz</h3>
                <span class="post">SSC Exam</span>
                <ul class="icon">
                    <li><a href="#"><i class="fa fa-book" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="box2">
            <img src="img/upsc.jpg">
            <div class="box-content">
              <div class="inner-content">
                <h3 class="title">Give Quiz</h3>
                <span class="post">Upse Exam</span>
                <ul class="icon">
                    <li><a href="#"><i class="fa fa-book" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
</div> -->


<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header bg-info text-white">
            <h1>Email Subscription</h1>
          <button type="button" class="close" data-dismiss="modal">&times;</button>

          
        </div>
        <div class="modal-body">
            <form action="/action_page.php">
                <div class="form-group">
                  <label for="email">Email address:</label>
                  <input type="email" class="form-control" placeholder="Enter email" id="email" required autocomplete="off">
                </div>
               
                
                <button type="submit" class="btn btn-primary">Email Subscription</button>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  

<div class="container pad text-center" id="blog">
  <h2 class="title-box">My Blogs</h2>
    <br><br>
  <div class="row ">
    <div class="col-lg-4 col-md-6 col-10 mx-auto">
      <div class="card">
        <img src="img/bank.jpg" alt="" class="img-fluid mx-auto" width="90%" >
        <div class="card-body">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam expedita veritatis facere perspiciatis quibusdam porro! A minus odio vel tempore aut eaque. Error doloribus nobis quasi recusandae sapiente aliquid quis?</p>
          <a href="" class="btn btn-success">Know More</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-10 mx-auto">
      <div class="card">
        <img src="img/bank.jpg" alt="" class="img-fluid mx-auto" width="90%" >
        <div class="card-body">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam expedita veritatis facere perspiciatis quibusdam porro! A minus odio vel tempore aut eaque. Error doloribus nobis quasi recusandae sapiente aliquid quis?</p>
          <a href="" class="btn btn-success">Know More</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-10 mx-auto">
      <div class="card">
        <img src="img/bank.jpg" alt="" class="img-fluid mx-auto" width="90%" >
        <div class="card-body">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam expedita veritatis facere perspiciatis quibusdam porro! A minus odio vel tempore aut eaque. Error doloribus nobis quasi recusandae sapiente aliquid quis?</p>
          <a href="" class="btn btn-success">Know More</a>
        </div>
      </div>
    </div>
  </div>
</div>

  <section class="container text-center" id="faq">
      <br><br><br><br>
      <h2 class="title-box">Frequently Asked Questions</h2>
      <p class="w-75 mx-auto">Our research on exam preparation and practice has helped us build a platform that helps students be exam ready efficiently. Following are some of the FAQs that will help you understand the exam platform better.</p>
      <br><br>
    <div id="accordion">
        
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Collapsible Group Item #2
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Collapsible Group Item #3
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
      </div>
</section> 


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