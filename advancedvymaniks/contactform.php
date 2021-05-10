
<?php
session_start();
$con=mysqli_connect('localhost','u920620485_drone','Drone123@');
if($con){
    ?>

    <script>
    // alert('database is connected');
    
    </script>
    
    <?php

}
else{
echo"not connect";

}
mysqli_select_db($con,'u920620485_drone');

if(isset($_POST['submit']))
{
    



$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['phone'];

$msg=$_POST['msg'];

$file = "uploads/Atanu Jana_04152021014016_A.jpg"; 

$to="info@advancedvymaniks.com";
$subject="Contact Us Form Filled  By " . $name ;

$message="

Email Send BY  $name,
 Email :- $email,
 Number :- $number,
 
 Message :- $msg,
 


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





    
    
    
   

// date_default_timezone_set('Asia/Kolkata');
    $da=date('Y-m-d');
    // $ta=date('h:i:s A');








   

$qy="insert into contactkey (name,email,phone,message) values ('$name','$email','$number','$msg')";

// `name`, `email`, `number`, `message`, `dates`

mysqli_query($con,$qy);

?>


<script>
// alert("Your message is added");
window.open('contact.php','_self');

</script>

<?php


}

?>