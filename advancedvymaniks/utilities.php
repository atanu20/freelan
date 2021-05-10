<!DOCTYPE html>
<html lang="en">

<head>
	<title>Advancedvymaniks | Utilities drone</title>
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

        

		.hero {
			width: 100%;
			height: 100vh;
			background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url("image/10740.jpg");
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


/* drive  */
.drive{
    padding: 100px 0;
    width: 100%;
    min-height: 70vh;
}
.mapp{
    padding: 75px 0;
    /* background: url("image/20424732-removebg-preview.png");
    background-position: center;
    background-size: 100% 100%;
    background-repeat: no-repeat; */
}
.mapp p{
    font-size: 18px;
    font-weight: 500;
    font-family: palatino linotype,serif;
}
.mapp img{
    border-radius: 15px;
}
.ll{
    line-height: 35px;
}
.mapp .card {
    border:none;
    box-shadow: 0 5px 35px rgb(143, 161, 214);
    padding:15px;
}
	</style>
</head>

<body onload="myfunc()">


    <!-- <div id="loading">
    
    </div> -->
	<?php
include("include/header.php");


?>
	<main>

		<section class="hero" id="home">

			<div class="hero-text">
				<div class="container">
                
               <div class="row">
                   <br><br>
                
                    <div class="col-lg-8 col-12  ">
                        <h1  class=" ab">Utilities</h1>
                        <br>
                    <h5 class=" ll">Oil and gas is a  industry incurring high costs in initialization,maintenance and transportation phases. </h5>
                    </div>
					
                     
				</div>
               </div>
			</div>

		</section>
        <section class="mapp textt" >
            <div class="container">
               <div class="card">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-12 mx-auto mb-3 d-flex justify-content-center align-items-center flex-column" data-aos="fade-up" data-aos-duration="2000">
                        <h3 class="ab"> Oil and Gas</h3>
                       <p>Drones can help optimize resources allocation and track oil spills,leakages,assessment of structural integrity of pipelines and monitoring of hazardous waste and byproducts.Offshore Rig inspections,flare stack inspections platform and pipeline inspections by regulatory bodies as well as companies can be regularized for better time and personnel management.

                    </p>

                      

                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mx-auto mb-3" data-aos="fade-up" data-aos-duration="2000">
                        <img src="image/Untitled-10.jpg" alt="" class="img-fluid d-block m-auto">
                        
                    </div>
                </div>
                
                <br>
                <div class="row">
                    
                    
                    <div class="col-lg-4 col-md-6 col-12 mx-auto mb-3 order-lg-1 order-md-1 order-2" data-aos="fade-up" data-aos-duration="2000">
                        <img src="image/four.jpg" alt="" class="img-fluid d-block m-auto">
                        
                    </div>
                    <div class="col-lg-8 col-md-6 col-12 mx-auto d-flex order-lg-2 order-md-2 order-1 justify-content-center align-items-center flex-column mb-3" data-aos="fade-up" data-aos-duration="2000">
                        <h3 class="ab"> Safety concerns</h3>
                       
                       <p>Safety of personnel especially on offshore rigs and other remote areas can be easily monitored.Delivery of supplies,medical aid as well as risk assessment before deployment of manpower can be established using drones</p>

                    </div>
                    
                </div>
                <br>

               </div>

<br><br>


               <div class="card">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-12 mx-auto mb-3 d-flex justify-content-center align-items-center flex-column " >
                        <h3 class="ab ">Electric line maintenance</h3>
                        <p>
                            Power line inspection is necessary every few years. Since the power lines run over multiple terrains and take a laborious approach using current methods, a very cheap and time effective alternate solution can be found in drones.
                            </p>

                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mx-auto mb-3 " >
                        <img src="image/current.jpg" alt="" class="img-fluid d-block m-auto">
                        
                    </div>
                  
                    
                </div>
                <br>
                <div class="row">
                    
                    
                    <div class="col-lg-4 col-md-6 col-12 mx-auto mb-3 order-lg-1 order-md-1 order-2" >
                        <img src="image/line.jpg" alt="" class="img-fluid d-block m-auto">
                        
                    </div>
                    <div class="col-lg-8 col-md-6 col-12 mx-auto d-flex order-lg-2 order-md-2 order-1 justify-content-center align-items-center flex-column mb-3" >
                        <h3 class="ab"> Mapping of lines</h3>
                       <p>Electrical network mapping by drone allows the inspection of thousands of kilometers of electrical lines in order to optimize and regularize inspections.</p>


                    </div>
                    
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-12 mx-auto mb-3 d-flex justify-content-center align-items-center flex-column " >
                       
                            <h3 class="ab"> Multitasking</h3>
                            <p>Drones can be customized i.e.; long range UAV's can cover large distances for visual inspections whereas quad copters can e utilized for spot inspections, testing and repairs.
     
     
                         </p>
     
     
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mx-auto mb-3 " >
                        <img src="image/mul.jpg" alt="" class="img-fluid d-block m-auto">
                        
                    </div>
                  
                    
                </div>
                <br>
                <div class="row">
                    
                    
                    <div class="col-lg-4 col-md-6 col-12 mx-auto mb-3 order-lg-1 order-md-1 order-2" >
                        <img src="image/sun_setting_silhouet_Orswv.jpg" alt="" class="img-fluid d-block m-auto">
                        
                    </div>
                    <div class="col-lg-8 col-md-6 col-12 mx-auto d-flex order-lg-2 order-md-2 order-1 justify-content-center align-items-center flex-column mb-3" >
                        <h3 class="ab ">Efficient and safe</h3>
                        <p>
                            It provides a safe alternative without posing any risk to life. Drones can be the first to reach the site of concern and visual inspection can be carried out to provide a basic idea and nature of the problem to the follow-up team.
                            </p>
                    </div>
                    
                </div>
               </div>

                
                
            </div>
        </section>

        
       
		
        

	</main>
    <?php
include("include/footer.php");


?>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script src="js/drone.js"></script>

	<script>

$(document).ready(function(){
    $('.counter').counterUp({
        'time': 2000,
        'delay': 10
      });
	 
	  $(".client .owl-carousel").owlCarousel({
    
    loop:true,
    nav:false,
    dots:false,
    autoplay:true,
    
    responsive:{
        0:{
            items:2,
            
        },
        600:{
            items:3,
            
        },
        800:{
            items:4,
        }
        
       
    }
});


});

AOS.init();
	</script>
<script>
    var preload=document.getElementById('loading');
    function myfunc() {
        preload.style.display="none";
    }
    
    </script>
</body>

</html>