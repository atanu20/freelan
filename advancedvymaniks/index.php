<!DOCTYPE html>
<html lang="en">

<head>
<title>Advancedvymaniks | Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
	

	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
	<!--! owl-carosole cdn  -->

	<link rel="stylesheet" href="css/drone.css">
	<style>
		* {
			padding: 0;
			margin: 0;
			box-sizing: border-box;
			scroll-behavior: smooth;
		}

	



		/* https://i.pinimg.com/originals/78/e8/26/78e826ca1b9351214dfdd5e47f7e2024.gif */

		.hero {
			width: 100%;
			min-height: 100vh;
			/* background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)), url("onne.jpg"); */
			background:  url("image/onne.jpg");
			background-position: center;
			background-size: cover;
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
			background-color: #FF1493;

		}

		.hero a:hover,
		.aboutus a:hover,
		.services .card a:hover,
		.contact a:hover {
			text-decoration: none;
			color: white;
		}

		/* aboutus  */
		.aboutus {
			padding: 100px 0;
			position: relative;
		}

		.aboutus h2 , .application h2{
			color: #FF1493;
			font-weight: 600;
		}

		/* .aboutus h2::before{
	content: " ";
	height: 3px;
	width: 150px;
	position: absolute;
	background-color: 	#FF1493;
	top:150px;
	


} */
		.aboutus h3 {
			color: #FF1493;
		}

		/* aboutus end */
		/* ========================= */
		/* counter-box  */
		.counter-box {
			width: 100%;
			min-height: 70vh;
			background-image: url("image/drone_one.jpg");
			background-position: center;
			background-size: cover;
			background-attachment: fixed;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;

		}

		.counter-box .card {
			background: transparent;
			border: 2px dotted white;
			border-radius: 10px;
			text-align: center;
			color: white;
			cursor: pointer;

		}

		.counter-box .card:hover {
			background-color: #00008b;
		}

		.counter-box .card i {
			color: white;

		}

		.counter-box .card p {
			font-size: 20px;
			font-weight: 600;
		}

		/* counter-box end */
		/* ================================= */
		/* services  */
		.services {
			padding: 100px 0;
			position: relative;
			
		}

		.services h2 {
			color: #FF1493;
			font-weight: 600;
		}

		/* .services h2::before {
	content: " ";
	height: 3px;
	width: 150px;
	position: absolute;
	background-color: 	#FF1493;
	top:150px;
	


} */
		.services .card {
			background-color: #00008b;
			border: none;
			box-shadow: 0 3px 5px rgba(0, 0, 0, 0.45);
			cursor: pointer;
			height: 580px;
		}

		.services .card:hover {
			box-shadow: 0 8px 15px rgba(0, 0, 0, 0.7);
		}

		.services .card .card-text {
			padding: 10px;
			text-align: justify !important;
			color: white;

		}

		.services .card-footer {
			background-color: #00008b;
			border: none;
			color: white;
		}

		.btnn {
			padding: 12px 20px;
			color: white;
			background: linear-gradient(to left, #cc2b5e, #753a88);
			transition: background 0.5s;

		}

		.btnn:hover {
			background: #FF1493;


		}

		/* secvices end */
		/* ====================== */

		/* contact  */
		.contact {
			margin-top: 50px;
			width: 100%;
			min-height: 45vh;
			background: linear-gradient(#2193b0, #6dd5ed);

		}
.con-up h4{
	font-weight: 400 !important;
	font-size: 20px;
}
		@media (min-width:730px) {
			.con-up {
				padding-top: 100px;
			}
		}


		/* contact end */
		/* ======================= */


		/* client  */
		.work {
			padding: 100px 0;
			position: relative;
		}

		.work .card {
			border: none;

			border-radius: 20px;
			transition: all linear 0.2s !important;
			margin-bottom: 20px;
			cursor: pointer;
		}

		.work .card:hover img {
			transition: 0.5s;

		}

		.work img {
			height: 300px;
			border-radius: 20px;
		}

		.work h2 {
			color: #FF1493;
			font-weight: 600;
		}

		/* .work h2::before {
	content: " ";
	height: 3px;
	width: 250px;
	position: absolute;
	background-color: 	#FF1493;
	top:150px;
	


} */
		.dis {
			background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.25));
			padding: 10px;
			margin-top: -60px;
			font-weight: 600;
			color: white;
			border-radius: 20px;
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

		a:hover,
		a:focus,
		.btn:hover,
		.btn:focus,
		button:hover,
		button:focus {
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
			color: white;
		}

		.new_footer_top .f_social_icon a+a {
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
			background-size: 100%;
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
			background-size: 100%;
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

		/* join */
		.join {
			padding-top: 100px;
			width: 100%;
			height: 50vh !important;
			background: url('image/2146.jpg');
			background-position: center;
			background-size: cover;
			position: relative;
			background-attachment: fixed;
			color: white;
			font-weight: 600;

		}

		#myVideo {
			position: absolute;
			left: 0;
			top: 0;
			min-width: 100%;
			min-height: 100%;
		}

		/* banar */
		

		.banar {
			width: 100%;
			height: 100vh;
		}

		.banar .items img {
			width: 100%;
			height: 100vh;
		}
		


		

		.banar a:hover {
			color: white;
		}
/* 
		@media (min-width:772px) and ( max-width:1400px) {
    .aboutus{
	margin-top:-260px;
	
}
    
} */



		/* items  */

		.items {
			position: relative;
			color: white;
		}

		.in-item {
			position: absolute;
			top: 40%;
			left: 7%;
		}

		.del {
			animation-delay: 11s;
		}

		.dela {
			animation-delay: 6s;
		}

		.delaa {
			animation-delay: 12s;
		}

		.delay {
			animation-delay: 7s;
		}

		footer .foo a:hover {
			color: white;
		}

		.application{
			padding: 75px 0;
			
		}
		.application .card{
			border: none;
			border-radius: 15px;
			box-shadow: 0 1px 20px #bfbbca;
			height: 500px;
			
		}
		.application .card img{
			height: 275px;
			border-radius: 15px;
		}

		.ww{
			width: 90%;
			max-width: 700px;
			color:#FF1493;
		}
		.tex-w{
			width: 400px;
			max-width: 90%;
			color:blueviolet;
			font-family: 'Orelega One', cursive;
		}
		@media (max-width:760px) {
			.tex-w{
				color: #FF1493;
			}
		}
	</style>
</head>
<?php
include("include/header.php");


?>
<body >


	


	
	<main>

		
		<section class="hero" id="home">

			<div class="hero-text">
				<div class="container">
					<br><br>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="tex-w">
								<h2 class="">The sky is not our limit , The sky is our Home
								</h2>
								<br>
								<a href="drones.php" class="btn">Get Started</a>
							</div>
							
							
							
						</div>
					</div>


				</div>
			</div>

		</section>
		<section class="aboutus textt" id="about">

			<h2 class="text-center " >ABOUT US</h2>
			<br><br>
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-11 mx-auto mb-3" >
						<img src="image/about_advanced.jpg" alt="" class="img-fluid d-block m-auto">
					</div>
					<div class="col-lg-6 col-md-6 col-11 mx-auto" >
						
						<p style="text-align: justify;"><strong>Advanced Vymaniks</strong> is a startup based out of the fastest technologically growing city in India. True to its name,the focus is on integrating  the latest, innovative and the most advanced features into practical real life applications. With drones on the frontline,we believe we can go the extra mile where existing technology faces limitations. </p>
						<p style="text-align: justify;">Entering into a vast array of civilian applications such as agriculture, medical,firefigthi ng and public safety; out team strives to find new and improved methods to impliment drones in bringing best results with maximum safety.</p>
						
						<br>
						<a href="about-us.php" class="btn">Know More</a>

					</div>
				</div>
			</div>

		</section>
		<!-- <section class="counter-box">
			

		</section> -->
		

		<section class="application textt">
			<h2 class="text-center " >SOLUTIONS</h2>
					<br><br>
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-6 col-12 mx-auto mb-3">
								<a href="mapping.php">
									<div class="card">
										<img src="serv/604c3c8ecb172.jpg" alt="" class="img-fluid">
										<div class="p-3">
											
											<h4>Surveying / Mapping</h4>
								<p>We extend services such as GIS, Drone Survey, Land survey, Stockpile Volumetric
									Analysis, Slope Monitoring, LIDAR, contours, and Urban Planning.</p>
										</div>
			
									</div>
								</a>
							</div>
							
							<div class="col-lg-4 col-md-6 col-12 mx-auto mb-3">
								<a href="medical-drone.php">
									<div class="card">
										<img src="serv/medical-drones.png" alt="" class="img-fluid">
										<div class="p-3">
											<h4>Medical drones</h4>
								<p>These drone are equipped to carry blood, plasma, platelets and other emergency
									medical supplies to far off places with speed and precision. </p>
										</div>
			
									</div>
								</a>
							</div>
							<div class="col-lg-4 col-md-6 col-12 mx-auto mb-3">
								<a href="firefighting-drone.php">
									<div class="card">
										<img src="serv/Firefigthing_Drones.png" alt="" class="img-fluid">
										<div class="p-3">
											<h4>Firefigthing Drones</h4>
							<p>These drones provide situational awareness from different perspectives for better
								management of resources and personnel during firefigthing operations.</p>
										</div>
			
									</div>
								</a>
							</div>
						
							<div class="col-lg-4 col-md-6 col-12 mx-auto mb-3">
								<a href="data-processing.php">
									<div class="card">
										<img src="serv/data.jpg" alt="" class="img-fluid">
										<div class="p-3">
											<h4 class="">Drone Data processing</h4>
								<p>Data as obtained from the drone is often in the form of images or videos that are to be organized and processed in order to obtain meaningful information. </p>
										</div>
			
									</div>
								</a>
							</div>
							<div class="col-lg-4 col-md-6 col-12 mx-auto mb-3">
								<a href="public-safety.php">
									<div class="card">
										<img src="serv/Policing-drones.png" alt="" class="img-fluid">
										<div class="p-3">
											<h4>Policing drones</h4>
								<p>Drones with good imaging capabilities can be used in identification of anti-social
									elements of society and preliminary action capabilities. </p>
										</div>
			
									</div>
								</a>
							</div>
							<div class="col-lg-4 col-md-6 col-12 mx-auto mb-3">
								<a href="creative-content.php">
									<div class="card">
										<img src="serv/tring.jpg" alt="" class="img-fluid">
										<div class="p-3">
											<h4>Aerial cinematography</h4>
											<p>Long shots for photography or film making conventionally require use of cranes or helicopters .Drones provide a cost effective solution with better maneuverability for shot adjustment</p>
										</div>
			
									</div>
								</a>
							</div>
							
						</div>
						
						
					</div>
		
		
		</section>


		<section class="contact textt">
			<div class="container">
				<div class="row">
					<div
						class="col-lg-6 col-md-6 col-11 mx-auto  mb-3 d-flex justify-content-center align-items-center">
						<img src="image/drone-city.png" alt="" class="img-fluid" >
					</div>
					<div class="col-lg-6 col-md-6 col-11 mx-auto mb-3 con-up">
						<h4 class="text-white text" >Furnishing aerial data
							through drone survey and mapping is proficient, pocket-friendly, and accurate. It allows
							businesses to make mindful decisions more cost-effectively and efficiently regarding
							significant assets.

						</h4>
						<br>
						<a href="contact.php" class="btn" data-aos="fade-up" data-aos-duration="3000">Contact Us</a>
					</div>

				</div>
			</div>

		</section>

<section class="application textt">
	<h2 class="text-center " >APLICATIONS</h2>
			<br><br>
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12 mx-auto mb-3">
						<a href="agricultural-drone.php">
							<div class="card">
								<img src="image/service/maxresdefault__2_.jpg" alt="" class="img-fluid">
								<div class="p-3">
									<h3>Agriculture drones</h3>
									<p>Modern farming methods involve  pest protection,high quality crops. Drones help farmers optimize the use of seeds, fertilizers, water, and pesticides more efficiently. </p>
								</div>
	
							</div>
						</a>
					</div>
					
					<div class="col-lg-4 col-md-6 col-12 mx-auto mb-3">
						<a href="mining-drone.php">
							<div class="card">
								<img src="image/service/mining_isometric_ill_ngtHA.jpg" alt="" class="img-fluid">
								<div class="p-3">
									<h3>Mining monitoring</h3>
									<p>People working in mining industry face hazardous work environment such as rock falls, extremely humid conditions, gas leaks, dust explosions cave-ins and floods.</p>
								</div>
	
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-6 col-12 mx-auto mb-3">
						<a href="transport.php">
							<div class="card">
								<img src="image/service/28472.jpg" alt="" class="img-fluid">
								<div class="p-3">
									<h3>Transport Drones</h3>
									<p>Roads and railway tracks need to be maintained regularly.Conventional methods are time consuming and require huge workforce for monitoring and maintenance.</p>
								</div>
	
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-6 col-12 mx-auto mb-3">
						<a href="utilities.php">
							<div class="card">
								<img src="image/mul.jpg" alt="" class="img-fluid">
								<div class="p-3">
									<h3>Utilities Drones</h3>
									<p>Indoor drone inspections in the power generation and utilities industry are helping to keep inspectors out of dangerous situations.</p>
								</div>
	
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-6 col-12 mx-auto mb-3">
						<a href="renewable-energy.php">
							<div class="card">
								<img src="image/sollar.jpg" alt="" class="img-fluid">
								<div class="p-3">
									<h3>Renewable Energy</h3>
									<p>The rapid growth in adaptation of renewable energy resources, their maintenance needs also need to be met with equal care. </p>
								</div>
	
							</div>
						</a>
					</div>
					
					<div class="col-lg-4 col-md-6 col-12 mx-auto mb-3">
						<a href="infrastructure.php">
							<div class="card">
								<img src="image/infost.jpg" alt="" class="img-fluid">
								<div class="p-3">
									<h3>Infrastructure Drone</h3>
									<p>Construction monitoring is essential to monitor progress, prevent cost overruns ,decide on time constraints and reduce material wastage. </p>
								</div>
	
							</div>
						</a>
					</div>
					
				</div>
				
				
			</div>


</section>

		
		
	
		
		

	</main>

	<?php
include("include/footer.php");


?>


	

	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script src="js/drone.js"></script>

	<script>

		$(document).ready(function () {
			$('.counter').counterUp({
				'time': 2000,
				'delay': 10
			});

			$(".client .owl-carousel").owlCarousel({

				loop: true,
				nav: false,
				dots: false,
				autoplay: true,

				responsive: {
					0: {
						items: 2,

					},
					600: {
						items: 3,

					},
					800: {
						items: 4,
					}


				}
			});

			$(".banar .owl-carousel").owlCarousel({

				loop: true,
				nav: false,
				dots: false,
				autoplay: true,
				autoplayTimeout: 5000,



				// animateIn: 'fadeIn',
				// animateOut: 'slideOutDown',
				//   animateIn: 'flipInX',
				//   animateOut: 'fadeOut',



				items: 1

			});


		});

		
	</script>
	
</body>

</html>