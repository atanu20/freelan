<!DOCTYPE html>
<html lang="en">

<head>
    <title>Advancedvymaniks | Custom drone</title>
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
            background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.2)), url("image/fire-drone.jpg");
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

        /* train  */


        /* traning  */


        /* drive  */
        .drive {
            padding: 100px 0;
            width: 100%;
            min-height: 70vh;
        }







        .her {
            width: 100%;
            min-height: 80vh;

            padding-top: 200px;
        }

        .work {
            padding: 75px 0;
        }

        .work .card {
            padding: 15px;
            border: none;
            box-shadow: 0 1px 40px #dad6e9;
            border-radius: 10px;
        }

        .work .card i {
            color: #5e2ced;
        }

        .drone .one {
            background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url("image/istockphoto-626421626-612x612.jpg");
            background-position: center;
            background-size: cover;
            height: 350px;
            width: 100%;
            border-radius: 15px;
        }

        .drone .two {
            background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url("image/modern-small-drone-ground_218381-4160.jpg");
            background-position: center;
            background-size: cover;
            height: 350px;
            width: 100%;
            border-radius: 15px;
        }

        .drone .three {
            background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url("image/11872.jpg");
            background-position: center;
            background-size: cover;
            height: 350px;
            width: 100%;
            border-radius: 15px;
        }

        .drone .four {
            background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url("image/white-drone-hovering-bright-blue-sky.jpg");
            background-position: center;
            background-size: cover;
            height: 350px;
            width: 100%;
            border-radius: 15px;
        }

        .drone .five {
            background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url("image/mitch-nielsen-pWtNPCpvVA8-unsplash.jpg");
            background-position: center;
            background-size: cover;
            height: 350px;
            width: 100%;
            border-radius: 15px;
        }

        .drone .six {
            background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url("image/drone-flying.jpg");
            background-position: center;
            background-size: cover;
            height: 350px;
            width: 100%;
            border-radius: 15px;
        }

        .drone .card {
            border: none;
            cursor: pointer;
            transform: scale(1);
            transition: transform 0.5s;


        }

        .drone .card:hover {
            transform: scale(1.2);

        }

        figure {
            overflow: hidden;

        }

        .cus {
            padding: 75px 0;
        }
        .bb{
            border: none !important;
            padding: 12px 35px;
            border-radius:0;
        }

        .cus .card{
    border: none !important;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 5px 30px rgba(170, 186, 236, 0.7);
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


        <section class="her">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 mx-auto order-lg-1 order-md-1 order-2">
                        <br><br>
                        <h1 class=" ab">Design your own custom drone</h1>
                        <br>
                        <h5 class="">Not finding a drone that fits your requirements? Our team analyses your design for
                            feasibility and provides cost analysis of your customized drone.</h5>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 mx-auto order-lg-2 order-md-2 order-1">
                        <img src="image/dro.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>

        </section>
        <section class="cus">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-8 col-12 mx-auto">



                      <div class="card">
                          <br><br>
                        <form action="customcontact.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">

                                <input type="text" class="form-control" name="name" placeholder="Enter name"
                                    required>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">

                                    <input type="email" class="form-control" name="email" placeholder="Enter email"
                                        required>
                                </div>
                                <div class="form-group col-md-6">

                                    <input type="tel" class="form-control" name="number" placeholder="Enter number"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">

                                <select class="form-control" name="application" required>
                                    <option value="">Select Application</option>
                                    <option value="Cinematography">
                                        Cinematography </option>
                                    <option value="Mapping">
                                        Mapping </option>
                                    <option value="Flower Dropping">
                                        Flower Dropping </option>
                                    <option value="Photography">
                                        Photography </option>
                                    <option value="Transportation">
                                        Transportation </option>
                                    <option value="Surveillance">
                                        Surveillance </option>
                                    <option value="Inspection">
                                        Inspection </option>
                                        <option value="Traning">
                                            Traning </option>

                                </select>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">


                                    <select class="form-control" name="payload" required>
                                        <option value="">Select Payload</option>
                                        <option value="1KG">
                                            1KG </option>
                                        <option value="5KG">
                                            5KG </option>
                                        <option value="10KG">
                                            10KG </option>
                                        <option value="15KG">
                                            15KG </option>
                                        <option value="20KG">
                                            20KG </option>
                                        <option value="30KG">
                                            30KG </option>
                                        <option value="40KG">
                                            40KG </option>
                                        <option value="50KG">
                                            50KG </option>

                                    </select>
                                </div>
                                <div class="form-group col-md-6">


                                    <select class="form-control" name="endurance" required>
                                        <option value="">Select Endurance</option>
                                        <option value="10minutes">
                                            10minutes </option>
                                        <option value="20minutes">
                                            20minutes </option>
                                        <option value="30minutes">
                                            30minutes </option>
                                        <option value="40minutes">
                                            40minutes </option>
                                        <option value="45minutes">
                                            45minutes </option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">


                                    <select class="form-control" name="rangge" required>
                                        <option value="">Select Range</option>
                                        <option value="500mts">
                                            500mts </option>
                                        <option value="1km">
                                            1km </option>
                                        <option value="2km">
                                            2km </option>
                                        <option value="3km">
                                            3km </option>
                                        <option value="4km">
                                            4km </option>
                                        <option value="5km">
                                            5km </option>

                                    </select>
                                </div>
                                <div class="form-group col-md-6">


                                    <select class="form-control" name="mode" required>
                                        <option value="">Select Mode</option>
                                        <option value="Manual">
                                            Manual </option>
                                        <option value="Autonomous">
                                            Autonomous </option>
                                        <option value="Both Manual &amp; Autonomous">
                                            Both Manual &amp; Autonomous </option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">


                                    <select class="form-control" name="gimbal" required>
                                        <option value="">Select Gimbal</option>
                                        <option value="2-axis">
                                            2-axis </option>
                                        <option value="3-axis">
                                            3-axis </option>

                                    </select>
                                </div>
                                <div class="form-group col-md-6">


                                    <select class="form-control" name="landing" required>
                                        <option value="">Select Landing Gear</option>
                                        <option value="Fixed Landing Gear">
                                            Fixed Landing Gear </option>
                                        <option value="Retractable Landing Gear">
                                            Retractable Landing Gear </option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">


                                    <select class="form-control" name="controller" required>
                                        <option value="">Select Radio Controller </option>
                                        <option value="6 Channel">
                                            6 Channel </option>
                                        <option value="8 Channel">
                                            8 Channel </option>
                                        <option value="9 Channel">
                                            9 Channel </option>
                                        <option value="12 Channel">
                                            12 Channel </option>

                                    </select>
                                </div>
                                <div class="form-group col-md-6">


                                    <select class="form-control" name="kit" required>
                                        <option value="">Select Kit Type</option>
                                        <option value="Economy Kit">
                                            Economy Kit </option>
                                        <option value="Standard Kit">
                                            Standard Kit </option>

                                    </select>
                                </div>
                            </div>
                           

                            <!-- <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="customFile" name="filename">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                              </div> -->
                              <div class="form-group">
                                <label for="exampleFormControlFile1">Upload requirement File(Optional)</label>
                                <input type="file" class="form-control-file" name="files">
                              </div>
                              
                              <!-- <input type="file" id="myFile" name="filename2"> -->
<br><br>
                          <div class="text-center">
                            <input type="submit" class="btn btn-primary bb" value="SUBMIT" name="submit" required>
                          </div>
                        </form>
                      </div>



                    </div>
                </div>
            </div>
        </section>
        <section class="work textt">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mx-auto mb-3">
                        <div class="card text-center ">
                            <i class="fa fa-inr fa-3x" aria-hidden="true"></i>
                            <h1 class="ab">Best</h1>
                            <h5>Price</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mx-auto mb-3">
                        <div class="card text-center ">
                            <i class="fa fa-cogs fa-3x" aria-hidden="true"></i>
                            <h1 class="ab">Trusted</h1>
                            <h5>Drone Makers</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mx-auto mb-3">
                        <div class="card text-center ">
                            <i class="fa fa-database fa-3x" aria-hidden="true"></i>
                            <h1 class="ab">Data</h1>
                            <h5>Processing Solutions</h5>
                        </div>
                    </div>
                </div>
            </div>

        </section>


      


        <!-- <section class="drone">
          <div class="container">
              <div class="row">
                <div class=" col-lg-6 col-md-6 col-12 mb-3 ">
<figure>
    <div class="card five d-flex align-items-center justify-content-center">
       
                            </div>
</figure>
                </div>
                
                 
                <div class="col-lg-6 col-md-6 col-12 mb-3 ">
                    
<figure>


    <div class="card three d-flex align-items-center justify-content-center">
       
          </div>

</figure>

                </div>
                <div class="col-lg-6 col-md-6 col-12 mb-3 ">
                  

                    <figure>
                        <div class="card four d-flex align-items-center justify-content-center">
                           
                                                </div>
                    </figure>

                </div>
                <div class=" col-lg-6 col-md-6 col-12 mb-3 ">
                    <figure>
                        <div class="card two d-flex align-items-center justify-content-center">
                           
                                                </div>
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mb-3 ">
                    <figure>
                        <div class="card one d-flex align-items-center justify-content-center">
                           
                                                </div>
                    </figure>

                </div>
               
                <div class="col-lg-6 col-md-6 col-12 mb-3 ">
                    <figure>
                        <div class="card six d-flex align-items-center justify-content-center">
                           
                                                </div>
                    </figure>

                </div>
              </div>
          </div>
      </section> -->





    </main>
    <?php
include("include/footer.php");


?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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


        });

        AOS.init();
    </script>
    <script>
        var preload = document.getElementById('loading');
        function myfunc() {
            preload.style.display = "none";
        }

    </script>
  
</body>

</html>
<!-- #201b53  -->