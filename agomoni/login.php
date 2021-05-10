<?php
session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'u191935016_agomonidata');




  $password =  mysqli_real_escape_string($con,$_POST['password']);
    $username =  mysqli_real_escape_string($con,$_POST['username']);
    // $cpassword =  mysqli_real_escape_string($con,$_POST['cpassword']);

    // $pass=password_hash($password,PASSWORD_BCRYPT);
    // $cpass=password_hash($cpassword,PASSWORD_BCRYPT);
    
     $pass=md5($password);

    $emailsearch="select * from users where username='$username' ";

    $qu=mysqli_query($con,$emailsearch);

    $count=mysqli_num_rows($qu);
    
             if($count){
                 
                 $passwordsearch="select * from users where password='$pass' ";

    $quue=mysqli_query($con,$passwordsearch);

    $passdecode=mysqli_num_rows($quue);


    // fullname 

    $sequery="SELECT * FROM `user_info` where (username='$username') ";
$query=mysqli_query($con,$sequery);
$nums=mysqli_num_rows($query);
                       
                           
                      
                        if($passdecode){

                            while($data= mysqli_fetch_array($query))
                                    {
                                        $_SESSION['full']=$data['name'];
                                    }
                                            ?>
                                            <script>
                                            alert("login succesfully");
                                            // alert("fullname"+ $_SESSION['profile']);
                                            </script>
                                    <?php
                                   
    
    

                                    $_SESSION['user']=$username;
                                    $_SESSION['pas']=$pass;
                                    
                                   header('location:agomoni_update_profile.php');
                                        }
                                    else
                                    {?>
                                    <script>
                                            alert(" password wrong ");
                                            window.open('Agomonihomefull.php','_self');
                                            </script>
                                    <?php
                                    
                                        }

                    }
                else
                {?>
                <script>
                        alert(" invalid username ");
                        window.open('Agomonihomefull.php','_self');
                        </script>
                <?php

                    }




?>




