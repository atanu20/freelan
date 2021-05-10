
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ | QUIZ Website Design</title>
    <link rel="stylesheet" href="style-index.css">
    <link rel="shortcut icon" type="image/jpg" href="img/logo.png">


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

</head>
<body>


<div class="container">
    <div class="navbar">

        <div class="logo">
            <a href="home.html"> <img src="img/logo.png" alt="logo" width="100px" class="animated fadeInLeft delay-1s"></a>
        </div>
        
    </div>
    

</div>


<!-- account --> 

<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                 <img src="img/QUIZ-3D.png" alt="" width="100%" class="animated zoomIn delay-2s ">
            </div>
            <div class="col-2 animated fadeInDown delay-1s" >
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>
                        <hr id="indicator">
                    </div>
                    <form action="login.php" method="post" id="loginform">
                         <input type="email" placeholder="Email" name="email">
                         <input type="password" placeholder="Password" name="password">
                         <input type="submit" class="btn" name="login" value="Login">
                         <a href="">Forgot Password</a>

                    </form>

                    <form action="register.php" method="post" id="registerform">
                        <input type="text" placeholder="Username" name="name">
                        <input type="email" placeholder="Email" name="email">
                        
                       
                        <input type="password" placeholder="Password" name="password">
                       
                        <input type="submit" class="btn" name="register" value="Register">
                         
                        
                   </form>

                </div>
                 
            </div>
        </div>

    </div>
</div>








<!-- footer -->

<div class="footer">
    <div class="container">
       
        <hr>
        <p class="copyright">Copyright 2020 - Atanu Jana</p>
    </div>
</div>


<!-- js for menu -->

<script>
    var items=document.getElementById("items");
    items.style.maxHeight="0px";
    function menutoggle()
    {
        if(items.style.maxHeight=="0px")
        {
            items.style.maxHeight="200px";
        }
        else{
            items.style.maxHeight="0px";
        }
    }
</script>


<!-- login-js -->

<script>
    var loginform=document.getElementById("loginform");
    var registerform=document.getElementById("registerform");
    var indicator=document.getElementById("indicator");

    function register(){
        registerform.style.transform="translateX(0px)"
        loginform.style.transform="translateX(0px)"
        indicator.style.transform="translateX(100px)"
    }
    function login(){
        registerform.style.transform="translateX(300px)"
        loginform.style.transform="translateX(300px)"
        indicator.style.transform="translateX( 0px)"
    }
    
</script>





    
</body>
</html>