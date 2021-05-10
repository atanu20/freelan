<!DOCTYPE html>
<html lang="en">

<head>
	<title>Advancedvymaniks | Drone traning</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	

<!--! owl-carosole cdn  -->

	<link rel="stylesheet" href="css/drone.css">
	<style>
		* {
			padding: 0;
			margin: 0;
			box-sizing: border-box;
			scroll-behavior: smooth;
		}


        #loading{
	width: 100%;
	height: 100vh;
	background: #fff url("image/working/Spinner-1s-200px.gif") no-repeat center;
	z-index: 99999999;
position: fixed;
}
		.hero {
			width: 100%;
			height: 100vh;
			background-image: url("image/JI92XtMb_4x.jpg");
			background-position: center;
			background-size:cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
			
		}

		.hero p {
			font-size: 18px;
			font-weight: 500;
		}


		.btn {
			padding: 12px 20px;
			color: white;
			background-color: 	#FF1493;

		}

		.hero a:hover , .aboutus a:hover , .services .card a:hover , .contact a:hover{
			text-decoration: none;
			color: white;
		}

		
.client{
	padding-bottom:50px ;
}

.client .card{
	border: none;
	
	
}
.client .card img{
	width: 150px;
	cursor: pointer;
    filter: grayscale(100%);
	display: block;
	margin: 0 auto;
}
.client .card img:hover{
    filter: grayscale(0);
}

/* client end */


/* footer  */


.new_footer_area {
    background: #fbfbfd;
}


.new_footer_top {
    padding: 120px 0px 270px;
    position: relative;
      overflow-x: hidden;
}
.new_footer_area .footer_bottom {
    padding-top: 5px;
    padding-bottom: 50px;
}
.footer_bottom {
    font-size: 14px;
    font-weight: 300;
    line-height: 20px;
    color: #7f88a6;
    padding: 27px 0px;
}
.new_footer_top .company_widget p {
    font-size: 16px;
    font-weight: 300;
    line-height: 28px;
    color: #6a7695;
    margin-bottom: 20px;
}
.new_footer_top .company_widget .f_subscribe_two .btn_get {
    border-width: 1px;
    margin-top: 20px;
}
.btn_get_two:hover {
    background: transparent;
    color: #5e2ced;
}
.btn_get:hover {
    color: #fff;
    background: #6754e2;
    border-color: #6754e2;
    -webkit-box-shadow: none;
    box-shadow: none;
}
a:hover, a:focus, .btn:hover, .btn:focus, button:hover, button:focus {
    text-decoration: none;
    outline: none;
}



.new_footer_top .f_widget.about-widget .f_list li a:hover {
    color: #5e2ced;
}
.new_footer_top .f_widget.about-widget .f_list li {
    margin-bottom: 11px;
}
.f_widget.about-widget .f_list li:last-child {
    margin-bottom: 0px;
}
.f_widget.about-widget .f_list li {
    margin-bottom: 15px;
}
.f_widget.about-widget .f_list {
    margin-bottom: 0px;
}
.new_footer_top .f_social_icon a {
    width: 44px;
    height: 44px;
    line-height: 43px;
    background: transparent;
    border: 1px solid #e2e2eb;
    font-size: 24px;
}
.f_social_icon a {
    width: 46px;
    height: 46px;
    border-radius: 50%;
    font-size: 14px;
    line-height: 45px;
    color: #858da8;
    display: inline-block;
    background: #ebeef5;
    text-align: center;
    -webkit-transition: all 0.2s linear;
    -o-transition: all 0.2s linear;
    transition: all 0.2s linear;
}
.ti-facebook:before {
    content: "\e741";
}
.ti-twitter-alt:before {
    content: "\e74b";
}
.ti-vimeo-alt:before {
    content: "\e74a";
}
.ti-pinterest:before {
    content: "\e731";
}

.btn_get_two {
    -webkit-box-shadow: none;
    box-shadow: none;
    background: #5e2ced;
    border-color: #5e2ced;
    color: #fff;
}

.btn_get_two:hover {
    background: transparent;
    color: #5e2ced;
}

.new_footer_top .f_social_icon a:hover {
    background: #5e2ced;
    border-color: #5e2ced;
  color:white;
}
.new_footer_top .f_social_icon a + a {
    margin-left: 4px;
}
.new_footer_top .f-title {
    margin-bottom: 30px;
    color: #263b5e;
}
.f_600 {
    font-weight: 600;
}
.f_size_18 {
    font-size: 18px;
}

.new_footer_top .f_widget.about-widget .f_list li a {
    color: #6a7695;
}


.new_footer_top .footer_bg {
    position: absolute;
    bottom: 0;
    background: url("image/working/footer_bg.png") no-repeat scroll center 0;
	
    width: 100%;
    height: 266px;
}

.new_footer_top .footer_bg .footer_bg_one {
    background: url("image/working/the-walk-gif.gif") no-repeat center center;
    width: 330px;
    height: 200px;
  background-size:100%;
    position: absolute;
    bottom: 0;
    left: 30%;
    -webkit-animation: myfirst 30s linear infinite;
    animation: myfirst 30s linear infinite;
}

.new_footer_top .footer_bg .footer_bg_two {
    background: url("image/working/drone-intro.gif") no-repeat center center;
    width: 88px;
    height: 100px;
  background-size:100%;
    bottom: 10;
    left: 30%;
    position: absolute;
    -webkit-animation: myfirst 30s linear infinite;
    animation: myfirst 30s linear infinite;
}



@-moz-keyframes myfirst {
  0% {
    left: -50%;
  }
  100% {
    left: 100%;
  }
}

@-webkit-keyframes myfirst {
  0% {
    left: -25%;
  }
  100% {
    left: 100%;
  }
}

@keyframes myfirst {
  0% {
    left: -25%;
  }
  100% {
    left: 100%;
  }
}

/* train  */

.bgg{
    margin-top: -150px;
    /* background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)); */
    background: white;
    border-radius: 15px;
    border: 2px dotted royalblue;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;

color: royalblue;
font-family: 'Playfair Display', serif;
    min-height: 250px;
    padding: 15px;
}

/* train  */
.move{
    font-size: 70px;
    word-spacing: 15px;
}
@media (max-width:996px) and (min-width: 576px) {
    .move{
        margin-top: 100px;
    font-size: 50px;
   
}
}
@media (max-width:576px)
{
    .move{
        margin-top: 250px;
        font-size: 35px;
    }
}

/* traning  */
.traning{
    padding-top: 150px;
 
   /* background:linear-gradient(rgba(255,255,255,0.7),rgba(255,255,255,0.7)), url('image/realistic-drone-illustration_1284-21855.jpg'); */
   
   width: 100%;
   
   background-position: center;
   background-size: 100% 100%;
  
}
.traning  h2 {
	color: 	#FF1493;
	font-weight: 600;
    
}
.traning img{
    height: 400px;
    
}

/* drive  */
.drive{
    padding: 100px 0;
    width: 100%;
    min-height: 70vh;
}
.tools{
    
	width: 100%;
	height: 50vh !important;
	background: url('image/2133053.jpg');
	background-position: center;
	background-size: cover;
	
	background-attachment: fixed;
	
}
/* support  */
.icon{
    width: 75px;
    height: 75px;
    background-color: royalblue;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color:white;
    margin-top: -35px;
}
.support .card{
    cursor: pointer;
    box-shadow: 0px 5px 5px rgba(67, 42, 124, 0.3);
}
.support .card:hover{
    background-color: royalblue;
    color: white;
}
.support .card:hover .icon{
    background-color: white;
    color: royalblue;
    border: 2px dotted royalblue;
}
	</style>
</head>

<body >


   
<?php
include("include/header.php");


?>
	<main>

	 <section class="hero" id="home">

			<div class="hero-text">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-10 col-12">
							<h1 class="text ">Our programme covers all round training by taking a customized approach for every individual.
							</h1>
							
							<br>
							<a href="#join" class="btn animated fadeInUp  delay-3s "> Get Started</a>
							<br><br>
						</div>
					</div>
					
                     <!-- <div class="row">
                         <div class="col-md-8 col-12 mx-auto text-center">
                             <h3 class="move"><span class="animated fadeInUp delay-1s" style="display:inline-block;">D</span><span class="animated fadeInDown delay-1s"style="display:inline-block;" >R</span><span class="animated fadeInUp delay-1s" style="display:inline-block;">O</span><span class="animated fadeInDown delay-1s" style="display:inline-block;">N</span><span class="animated fadeInUp delay-1s" style="display:inline-block;"> E </span>   <span class="animated fadeInUp delay-1s" style="display:inline-block;">  T</span><span class="animated fadeInDown delay-1s"style="display:inline-block;" >R</span><span class="animated fadeInUp delay-1s" style="display:inline-block;">A</span><span class="animated fadeInDown delay-1s" style="display:inline-block;">N</span><span class="animated fadeInUp delay-1s" style="display:inline-block;">I</span><span class="animated fadeInDown delay-1s"style="display:inline-block;" >N</span><span class="animated fadeInUp delay-1s" style="display:inline-block;">G</span></h3>                      
                            
                            
                            
                            
                        </div>


                     </div> -->

				</div>
			</div>

		</section>
    

        <section class="traning textt" id="join">
            <!-- <h2>TRANING PROGRAM</h2> -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mx-auto mb-5 d-flex align-items-center justify-content-center">
                        <img src="image/20424732-removebg-preview.png" alt="" class="img-fluid ">

                    </div>
                    <div class="col-lg-8 col-md-6 col-12 mx-auto mb-5 p-5">
                        <h2>Drone Pilot Training Program</h2>
                        <hr>
                        <h5>Go Beyond and hone your pilot skills by harnessing our meritorious drone pilot training program to fulfill your drone dreams. Uncover your potential, and let's celebrate the quest of drones together!</h5>
                            <br>
                            <a href="contact.php" class="btn">Join Us</a>

                    </div>
                   
                </div>
              
            </div>
        </section>
        <section class="drive textt">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-12 mx-auto mb-5">
                        <p>UAV'S are fast becoming integrated with our day to day lives.Hobby flying for fun and photography or  professional piloting requires proper understanding of functioning of drones and their maintainance. Improper usage can not only invite penalties from controlling agencies and police but also more importantly lead to loss of life and property. Development of drone skills is essential and only be achieved through proper training.</p>
                        
                        <p>We provide classes and organize workshops for indivisulas, institutions and industry personnel.
                            Our training programme covers all round training in every aspectvrelated to drones and customized approach for each indivisual. 
                            </p>
                            <p>The training is provided under following categories-</p>
                            <h4>Entusiasts :</h4>
                            <ul  class="pl-3">
                                <li>Introductiin to UAV'S.</li>
                                <li>Building your own UAV.</li>
                                <li>Simulator experience. </li>
                                <li>Drone maintainance training.</li>
                            </ul>
                            <h4>Professional :</h4>
                            <ul  class="pl-3">
                                <li>Introduction and simulator based training.</li>
                                <li>Custom software usage and analysis.</li>
                                <li>DGCA Guidelines and certification. </li>
                                
                            </ul> 

                    </div>
                    <div class="col-lg-5 col-md-5 col-12 mx-auto mb-5 d-flex align-items-center justify-content-center">
                        <img src="image/man-with-drone-flat-color-faceless-character_151150-3205.jpg" alt="" class="img-fluid ">
                        
                    </div>
                </div>
            </div>
        </section>
        <section class="support textt">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mb-5">
                        <div class="card d-flex align-items-center justify-content-center text-center p-2">
                            <div class="icon">
                                <i class="fa fa-briefcase fa-2x" aria-hidden="true"></i>
                            </div>
                            <br>
                            <p>Invest your experience in numerous projects across different sectors</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-5">
                        <div class="card d-flex align-items-center justify-content-center text-center p-2">
                            <div class="icon">
                                <i class="fa fa-users  fa-2x" aria-hidden="true"></i>
                            </div>
                            <br>
                            <p>We have over 100+ Industry Leading clients like NLC, Credai, L&T, Tata Steel</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-5">
                        <div class="card d-flex align-items-center justify-content-center text-center p-2">
                            <div class="icon">
                                <i class="fa fa-handshake-o fa-2x" aria-hidden="true"></i>
                            </div>
                            <br>
                            <p>24/7 support is eternal with you and presents assistance on every project</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       
		<!-- <section class="client">
            <br><br>
			<div class="container">
				<div class="row">
					<div class="owl-carousel owl-theme">
						<div class="card">
							<img src="image/client/logo-coca-cola.png" alt="" class="img-fluid">
						</div>
						<div class="card">
							<img src="image/client/logo-godrej.png" alt="" class="img-fluid">
						</div>
						<div class="card">
							<img src="image/client/logo-oppo.png" alt="" class="img-fluid">
						</div>
						<div class="card">
							<img src="image/client/logo-paypal.png" alt="" class="img-fluid">
						</div>
						<div class="card">
							<img src="image/client/logo-philips.png" alt="" class="img-fluid">
						</div>

					</div>
					
				</div>
			</div>
		</section> -->
		
<br><br>

	</main>
	<?php
include("include/footer.php");


?>

	
	<script src="js/drone.js"></script>

	
</body>

</html>