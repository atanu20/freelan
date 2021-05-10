<?php

session_start();
if(!isset($_SESSION['user']))
{
  header('location:index.php');
}

$el=$_SESSION['user'];

$uname = strstr($el, '@', true)


?>
<?php
include "admin/connection.php";

if(isset($_POST['search']))
{
    $exam=$_POST['exam'];
    date_default_timezone_set('Asia/Kolkata');
                $da=date('Y-m-d');


                $qq="select * from exam_category where  (category='$exam')";

                $resultq=mysqli_query($con,$qq);

                while($valueq=mysqli_fetch_array($resultq))
                {
                    $exam_time=$valueq['exam_time'];
                    $_SESSION['exm_st_time']= $exam_time;
                }


    $q="select * from result where  (user='$el' && category='$exam')";

   $result=mysqli_query($con,$q);

    $num=mysqli_num_rows($result);
    if($num >0)
    {

        while($value=mysqli_fetch_array($result))
        {
            $dat=$value['date'];
        }

        $date1=date_create($dat);
$date2=date_create($da);
$diff=date_diff($date1,$date2);
$val= $diff->format("%a");
$date_dif=7-$val;

        if($val<7)
        {
            $msg="you can not give this exam , come after ".$date_dif. " days."; 
           $dis="disabled";
        }
        else{
            $msg="Start Quiz";
        $dis=" ";
        }
    }
    else{
        $msg="Start Quiz";
        $dis=" ";
    }
}


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



    </style>
  </head>
  <body  onload="timeout()">
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
              
              <div class="col-md-8 col-12 mx-auto shad pb-5">
              <form action="ans_result.php" method="post" id="form_sub">
            
              <p class="float-right text-white px-3 py-2" id="time"><?php  echo $exam_time; ?></p>
              <!-- <div> <span id="time" class="fl">05:00</span> minutes!</div> -->
                 <?php

                 include "admin/connection.php";

                 if(isset($_POST['search']))
                 {
                     $exam=$_POST['exam'];
                     $_SESSION['ex_cat']=$exam;
                    //  date_default_timezone_set('Asia/Kolkata');
    
                     ?>
                     <p class="bg-danger p-2 text-center text-white"> <?php echo $msg ?></p>
                                <h3 class="text-center p-2 ">Quiz on <?php echo $exam; ?></h3>

                                <?php
                                                    $sequery="SELECT * FROM `questions` WHERE category_ex='$exam'";
                                $query=mysqli_query($con,$sequery);
                                $nums=mysqli_num_rows($query);

                                while($data= mysqli_fetch_array($query))

                                {
                                ?>
                                <div class="card m-3">
                                    <div class="card-header bg-info text-white">
                                    <?php echo $data['qu_no'] ?> )   <?php echo $data['question']  ?>
                                    </div>
                                <div class="card-body">
                               <?php   if(isset($data['op1'])){  ?>
                                <div class="form-check">
                                    <input class="form-check-input position-static radval" type="radio" name="checker[<?php echo $data['qu_no'] ?>]" id="blankRadio1"  value="<?php echo $data['op1'] ?>"  > <?php echo $data['op1'] ?>
                                    <!--  -->

                                </div>

                                <?php  }?>
                                <?php   if(isset($data['op2'])){  ?>
                                <div class="form-check">
                                    <input class="form-check-input position-static radval" type="radio" name="checker[<?php echo $data['qu_no'] ?>]" id="blankRadio2" value="<?php echo $data['op2'] ?>"  > <?php echo $data['op2'] ?>
                                </div>
                                <?php  }?>
                                <?php   if(isset($data['op3'])){  ?>
                                <div class="form-check">
                                    <input class="form-check-input position-static radval" type="radio" name="checker[<?php echo $data['qu_no'] ?>]" id="blankRadio3"  value="<?php echo $data['op3'] ?>" > <?php echo $data['op3'] ?>
                                </div>
                                <?php  }?>
                                <?php   if(isset($data['op4'])){  ?>
                                <div class="form-check">
                                    <input class="form-check-input position-static radval" type="radio" name="checker[<?php echo $data['qu_no'] ?>]" id="blankRadio4"  value="<?php echo $data['op4'] ?>" > <?php echo $data['op4'] ?>
                                    <!-- required="required"  -->
                                </div>
                                <?php  }?>

                                <div class="form-check">
                                    <input class="form-check-input position-static radval" type="radio" name="checker[<?php echo $data['qu_no'] ?>]" id="blankRadio4"  value="none1" style="display:none;" checked="checked">
                                </div>
                               
                                
                                <!-- <div class="card-footer ans" style="display:none;" >
                                    <p class="text-danger p-2">Currect answer is : <?php echo $data['answer'] ?></p>
                                </div> -->
                                                            
                                </div>
                                </div>





                                <?php
                                    
                                }

                 }

                 ?>
                  <div class="form-check">
                                    <input class="form-check-input position-static radval" type="text" name="end_exam" id="time_val"  value="" style="display:none;"  >
                                </div>
               
               <input type="submit"  class="btn btn-success d-block m-auto" name="exm_sub"   value="Submit" id="btn1" <?php echo $dis  ?>>
               <!-- onclick="get_val();" -->

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

    <!-- <script>
        $(document).ready(function(){
          $("#btn1").click(function(){
            $(".ans").show();
            $(".radval").attr('disabled',true);
            $("#btn1").attr('disabled',true);
          });
        });

    </script> -->
    <!-- <script>
   function timeout()
   {
    var timeleft=120;
var minit=Math.floor(timeleft/60);
var sec=Math.floor(timeleft%60);
if(timeleft<=0)
{
    clearTimeout(tm);
    document.getElementById("form_sub").submit();
}
else{
    document.getElementById("countdown").innerHTML=minit+":"+sec;

}
timeleft--;
var tm =setTimeout(() => {
    timeout();
    
}, 1000);
   }

    </script> -->
    <!-- <script>
    function get_val()
    {
       var va= document.getElementById("time").innerHTML;
       document.getElementById("time_val").value=va;
       var bo=document.getElementById("time_val").value;

       alert (bo);
       document.getElementById("img-in").value = id;
            var va=document.getElementById("img-in").value;
alert(va);
   
    }
    </script> -->

    <script>
    function startTimer(duration, display,input_time) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;
        input_time.value=minutes + ":" + seconds;

        if (--timer < 0) {
            document.getElementById("time").innerHTML="Stop CountDown";
            document.getElementById("btn1").click();
        }
    }, 1000);
}

window.onload = function () {
    
    var fiveMinutes = 60 * <?php echo $exam_time; ?>,
        display = document.querySelector('#time');
        input_time= document.querySelector('#time_val');
    startTimer(fiveMinutes, display,input_time);
};
</script>
  </body>
</html>

