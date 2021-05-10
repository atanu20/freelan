<!DOCTYPE html>
<html lang="en">

<head>
	<title>Advancedvymaniks | Data Processing drone</title>
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
			background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.2)),url("image/33337.jpg");
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


.mapp{
    padding-bottom: 75px;
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
                        <h1  class=" ab">Drone Data Processing</h1>
                        <br>
                    <h5 class="">Drone data is processed using the technique called Digital Photogrammetry.Data as obtained from the drone is often in the form of images or videos that are to be organized and processed in order to obtain meaningful information.</h5>
                    </div>
					
                     
				</div>
               </div>
			</div>

		</section>
		
        
        <section class="mapp textt">
            <br><br>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 mx-auto order-lg-1 order-md-1 order-2 d-flex justify-content-center align-items-center flex-column">
                       
                       
                        <br>
                    <p class=""> Data as obtained from the drone is often in the form of images or videos that are to be organized and processed in order to obtain meaningful information. Many a software  can be used to process the data.</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 mx-auto order-lg-2 order-md-2 order-1">
<img src="image/smart-farm-management-information-systems-robotics_82574-5609.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-lg-4 col-md-6 col-12 mx-auto mb-3 order-lg-1 order-md-1 order-2" >
                        <img src="image/two.jpg" alt="" class="img-fluid d-block m-auto">
                        
                    </div>
                    <div class="col-lg-8 col-md-6 col-12 mx-auto mb-3 order-lg-2 order-md-2 order-1 d-flex justify-content-center align-items-center flex-column" >
                        <h2 class="ab">The essential steps however include-</h2>
                       
                        <br>           
                        <p>
                            Ortho Rectification involves adjustment of aerial imagery for optical distortions  and apparent changes in the position of ground objects caused by the perspective of the sensor view angle and ground terrain.This is done by aligning the image with predetermined ground points or fixed reference images.
                            </p>
                    </div>
                </div>
                <br>
                
                
                <div class="row">
                    
                    <div class="col-lg-8  col-md-6 col-12 mx-auto d-flex justify-content-center align-items-center flex-column mb-3" >
                        <p>Geographical information systems (GIS software) use techniques such as  DEM,DTM and DSM modelling that use a grid based approach to model the elevations,terrains and surfaces respectively.</p>

                       

                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mx-auto mb-3" >
                        <img src="image/data-pr.jpg" alt="" class="img-fluid d-block m-auto">
                        
                    </div>
                    
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-4 order-lg-1 order-md-1 order-2 col-md-6 col-12 mx-auto mb-3" >
                        <img src="image/Drone_Monochromatic.jpg" alt="" class="img-fluid d-block m-auto">
                        
                    </div>
                    <div class="col-lg-8 col-md-6 order-lg-2 order-md-2 order-1 col-12 mx-auto d-flex justify-content-center align-items-center flex-column mb-3" >
                                                
                        <p>
                            2D/3D Feature Extraction is another feature that proves very useful.GIS and CAD modelling software can be used to extract and recreate 3D models from 2D images
                            </p>
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
<!-- #201b53  -->