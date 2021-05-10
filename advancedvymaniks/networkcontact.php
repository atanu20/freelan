
<?php
session_start();
$con=mysqli_connect('localhost','u920620485_drone','Drone123@');
if($con){
    ?>

    <script>
    //  alert('database is connected');
    
    </script>
    
    <?php

}
else{
echo"not connect";

}
mysqli_select_db($con,'u920620485_drone');

if(isset($_POST['submit']) && isset($_POST['work']) )
{
    
   


$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$address=$_POST['address'];
$city=$_POST['city'];
$zip=$_POST['zip'];
$douhave=$_POST['douhave'];
$tellusdrone=$_POST['tellusdrone'];
$license=$_POST['license'];
$hours=$_POST['hours'];
$project=$_POST['project'];


$arr=$_POST['work'];
$work=implode(", ",$arr);











                

$to="info@advancedvymaniks.com";
                        $subject="Drone Network Form Filled  By  " . $name ;
                        $message="
                         Email Send BY  $name,
                         Email :- $email,
                         Number :- $number,
                        address :- $address,
                         city :- $city,
                        Zip:- $zip,
                        Do you have a Drone? :- $douhave,
                         If Yes, Tell us about your drone:- $tellusdrone,
                         Drone License (Registration with DGCA)? :- $license,
                         How many hours of Drone flying experience do you have? :- $hours,
                         How many projects have you done? :- $project,
                         You have worked on:- $work
                        

                        "
                        ;
                        $form=$email;
                        $headers= "Form : $form";

                        if(mail($to,$subject,$message,$headers))
                        {?>
                            <script>
                            alert('We get your message ,Please contact with +91-7259636477 number');
                            
                            </script>
                            <?php
                        }
                        else{
                            ?>
                            <script>
                            alert('mailed not send');
                            
                            </script>
                            <?php
                        }











                    
                    $qy="insert into network_drone (name,email,number,address,city,zip,douhave,tellusdrone,license,work,hours,project) values ('$name','$email','$number','$address','$city','$zip','$douhave','$tellusdrone','$license','$work','$hours','$project')";

                   
                    mysqli_query($con,$qy);
                    ?>
                
                
                <script>
                // alert("Your message is added");
                window.open('drone-network.php','_self');
                
                </script>
                
                <?php
                    
     
}
else{
    ?>
 <script>
                alert(`Please select atleast one from "Industries you have worked on"`);
                window.open('drone-network.php','_self');
                
                </script>

<?php
}



?>