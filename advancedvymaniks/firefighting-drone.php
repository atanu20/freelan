<!DOCTYPE html>
<html lang="en">

<head>
	<title>Advancedvymaniks | Firefighting drone</title>
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
			background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.2)),url("image/fire-drone.jpg");
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
                   <br><br>
                
                    <div class="col-lg-8 col-12 ">
                        <h1  class="">Firefighting Drones</h1>
                        <br>
                    <h5 class="">An eye in the sky is very beneficial to identify hot spots and direct firefighters with better information and efficiency.Drones equipped with thermal imaging cameras can work even in  low visibility conditions .</h5>
                    </div>
					
                     
				</div>
               </div>
			</div>

		</section>
        <section class="mapp textt">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-12 mx-auto mb-3">
                       <p> Drones equipped with spotlights can allow night time visibility during fire or natural disasters, allowing firefighters to quickly and effectively scout out dangerous fires, observe and monitor surrounding area, guide and warn people to safety.</p>
                        <br>
                        <p>Situational awareness using drones provides multiple perspectives leading to better decision making and customized allocation of resources and personnel during rescue operations</p>

                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mx-auto mb-3">
                        <img src="image/fir.jpg" alt="" class="img-fluid d-block m-auto">
                        
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mx-auto mb-3 order-lg-1 order-md-1 order-2">
                        <img src="image/fire.jpg" alt="" class="img-fluid d-block m-auto">
                        
                    </div>
                    <div class="col-lg-8 col-md-6 col-12 mx-auto mb-3 d-flex justify-content-center align-items-center flex-column order-lg-2 order-md-2 order-1">
                                                <h3 class="ab ">Multi-type fire fighting</h3>
                        <p>Drones can be equipped with a range of chemical extinguishers for fighting different classes and types of fire.</p>

                    </div>
                    
                </div>
                <br>
                <div class="row">
                    
                    <div class="col-lg-8 col-md-6 col-12 mx-auto d-flex justify-content-center align-items-center flex-column mb-3">
                                                <h3 class="ab ">Closer approach</h3>
                        <p>
                            Drones made using heat resistant materials can be maneuvered very close to the source. Isolation and extinguishing of the source can help decrease the spread and provide faster results.
                            </p>

                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mx-auto mb-3">
                        <img src="image/fir-dr.jpg" alt="" class="img-fluid d-block m-auto">
                        
                    </div>
                    
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mx-auto mb-3 order-lg-1 order-md-1 order-2">
                        <img src="image/fire-allocation.jpg" alt="" class="img-fluid d-block m-auto">
                        
                    </div>
                    <div class="col-lg-8 col-md-6 col-12 mx-auto d-flex justify-content-center order-lg-2 order-md-2 order-1  align-items-center flex-column mb-3">
                                                <h3 class="ab ">Fast and effective allocation</h3>
                        <p>Fire personnel are limited in speed and number; drones can pinpoint source of fire and provide alternative and safer approach routes.</p>

                    </div>
                    
                    
                </div>
            </div>
        </section>

        
       
		


	</main>
	<?php
include("include/footer.php");


?>
	
	<script src="js/drone.js"></script>

	
</body>

</html>