<?php
session_start();
include  "admin/connection.php";



if(isset($_POST['login']))
{




  $password =  mysqli_real_escape_string($con,$_POST['password']);
    $email =  mysqli_real_escape_string($con,$_POST['email']);
    // $cpassword =  mysqli_real_escape_string($con,$_POST['cpassword']);

    // $pass=password_hash($password,PASSWORD_BCRYPT);
    // $cpass=password_hash($cpassword,PASSWORD_BCRYPT);
    
     $pass=md5($password);

    $emailsearch="select * from register where email='$email' ";

    $qu=mysqli_query($con,$emailsearch);

    $count=mysqli_num_rows($qu);
    
             if($count){
                 
                 $passwordsearch="select * from register where password='$pass' ";

    $quue=mysqli_query($con,$passwordsearch);

    $passdecode=mysqli_num_rows($quue);


   
                           
                      
                        if($passdecode){

                            
                                            ?>
                                            <script>
                                            alert("login succesfully");
                                            // alert("fullname"+ $_SESSION['profile']);
                                            </script>
                                    <?php
                                   
    
    

                                    $_SESSION['user']=$email;
                                   
                                    
                                   header('location:main.php');
                                        }
                                    else
                                    {?>
                                    <script>
                                            alert(" password wrong ");
                                            window.open('index.php','_self');
                                            </script>
                                    <?php
                                    
                                        }

                    }
                else
                {?>
                <script>
                        alert(" invalid email ");
                        window.open('index.php','_self');
                        </script>
                <?php

                    }


                }

?>




