<!DOCTYPE html>
<html lang="en">

<head>
	<title>Advancedvymaniks | Medical drone</title>
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
			background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.2)),url("image/db.jpg");
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



/* drive  */

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
                        <h1  class="">Medical Drones</h1>
                        <br>
                    <h5 class="">Instant medical aid where and when required can save countless lives. Ensuring that blood,vaccines,snake bite serum and medical supplies reach the destination can be very helpful during the times of outbreaks,accidents,rescue operations and countless other situations.</h5>
                    </div>
					
                     
				</div>
               </div>
			</div>

		</section>
        <section class="mapp textt">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-12 mx-auto mb-3" >
                        <p >Field medical units and emergency responders also require consistent replenishment of supplies to remain safe and effective in the field.</p>
                        <br>
                        <p>Drones can bridge the gap between first aid and first response team. Drone delivery makes it possible to courier needed supplies to remote areas in harsh weather and navigate disaster areas without risk. Modern drones are outfitted to carry out organ deliveries with least risk and shortest time over longer distances.</p>

                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mx-auto mb-3" >
                        <img src="image/drone-delivery-abstract-concept-illustration_335657-3823.jpg" alt="" class="img-fluid d-block m-auto">
                        
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mx-auto mb-3 order-lg-1 order-md-1 order-2" >
                        <img src="image/quadrocopter-with-first-aid-kit-white-isolated-3d-illustration_356060-304.jpg" alt="" class="img-fluid d-block m-auto">
                        
                    </div>
                    <div class="col-lg-8 col-md-6 col-12 mx-auto mb-3 d-flex justify-content-center align-items-center flex-column order-lg-2 order-md-2 order-1" >
                                                <h3 class="ab ">Expediting Transport</h3>
                        <p>Transplantation of an organ  as early as possible  is critical in terms of its usability.Drones can cut transportation time drastically while protecting its vitality.</p>

                    </div>
                    
                </div>
                <br>
                <div class="row">
                    
                    <div class="col-lg-8 col-md-6 col-12 mx-auto d-flex justify-content-center align-items-center flex-column mb-3 " >
                                                <h3 class="ab ">Deliver essential supplies</h3>
                        <p>
                            Drones could also deliver emergency medical supplies to areas hit by communicable diseases, disaster areas and other areas where access is limited. Medical personnel on field require continuous replenishment of supplies.
                            </p>

                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mx-auto mb-3 " >
                        <img src="image/dr-dev.jpg" alt="" class="img-fluid d-block m-auto">
                        
                    </div>
                    
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mx-auto mb-3 order-lg-1 order-md-1 order-2" >
                        <img src="image/drones-quadrocopters-isometric-composition-with-text-people-waiting-ambulance-aircraft-loaded-with-medicine-box_1284-32115.jpg" alt="" class="img-fluid d-block m-auto">
                        
                    </div>
                    <div class="col-lg-8 col-md-6 col-12 mx-auto d-flex justify-content-center align-items-center flex-column mb-3 order-lg-2 order-md-2 order-1" >
                                                <h3 class="ab ">Semi-Automated external defibrillators</h3>
                        <p>Automated external defibrillators(AED) can be delivered by drones to the scene much before emergency medical services arrive,this provides access to  a doctor or medical professional present at the location to offer immediate assistance.</p>

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