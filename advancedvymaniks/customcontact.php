
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

if(isset($_POST['submit']))
{
    
    date_default_timezone_set('Asia/Kolkata');
   


$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$application=$_POST['application'];
$payload=$_POST['payload'];
$endurance=$_POST['endurance'];
$rangge=$_POST['rangge'];
$mode=$_POST['mode'];
$gimbal=$_POST['gimbal'];
$landing=$_POST['landing'];
$controller=$_POST['controller'];
$kit=$_POST['kit'];

if(file_exists($_FILES['files']['tmp_name']) || is_uploaded_file($_FILES['files']['tmp_name'])){

    $fileExtensionsAllowed = ['jpeg','jpg','png','docx','doc','pdf','txt'];
    $files=$_FILES['files']['name'];
    $temp=$_FILES['files']['tmp_name'];
    $fileSize = $_FILES['files']['size'];
    $file_type        = $_FILES['files']['type'];
    $fileExtension = strtolower(end(explode('.',$files)));

    if (in_array($fileExtension,$fileExtensionsAllowed)) {
        
        
            if($fileSize>4000000)
            {
                ?>
            
            
                <script>
                alert("File exceeds maximum size (4MB)");
                window.open('drones.php','_self');
                
                </script>
                
                <?php
            }
        else{
                    $newfile = date('_mdYHis_');
                    $filename = $name.$newfile.$files;
                    
                    // move_uploaded_file($temp,"uploads/$filename");


                    // $file_mail= "uploads/".$filename;



                

                        $to="info@advancedvymaniks.com";
                        $subject="Apply for Custom Drone By  " . $name ;
                        $message="
                        <h2>Apply for Custom Drone Request Submitted</h2>
                         <p> <b> Email Send BY :</b>  $name </p>
                         <p> <b> Email :</b>  $email </p>
                         <p> <b> Number :</b> $number </p>
                         <p> <b> Application  :</b>  $application </p>
                         <p> <b>  payload  :</b>  $payload  </p>
                         <p> <b> Endurance :</b>  $endurance </p>
                         <p> <b> Range  :</b>  $rangge </p>
                         <p> <b>  Mode  :</b>  $mode  </p>
                         <p> <b> Gimbal :</b>  $gimbal </p>
                         <p> <b>   Landing  :</b>  $landing  </p>
                         <p> <b> Controller :</b>  $controller </p>
                         <p> <b> Kit :</b>  $kit </p>
                         
                         
                         
                         
                         
                         
                       
                        

                        "
                        ;
                        $form=$email;
                        // $headers= "Form : $form";
                        
                        
                    //     $email_message = '<h2>Contact Request Submitted</h2>
                    // <p><b>Name:</b> '.$name.'</p>
                    // <p><b>Email:</b> '.$email.'</p>
                    // <p><b>Subject:</b> '.$subject.'</p>
                    // <p><b>Message:</b><br/>'.$message.'</p>';
                    $message.="Please find the attachment";
                    $semi_rand = md5(uniqid(time()));
                    $headers = "From: ".$form;
                        
                        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
 
                        $headers .= "\nMIME-Version: 1.0\n" .
                        "Content-Type: multipart/mixed;\n" .
                        " boundary=\"{$mime_boundary}\"";
                        
                        // if($_FILES["file"]["name"]!= ""){  
                        // 	$strFilesName = $_FILES["file"]["name"];  
                        	$strContent = chunk_split(base64_encode(file_get_contents($_FILES["files"]["tmp_name"])));  
                        	
                        	
                            $message .= "This is a multi-part message in MIME format.\n\n" .
                            "--{$mime_boundary}\n" .
                            "Content-Type:text/html; charset=\"iso-8859-1\"\n" .
                            "Content-Transfer-Encoding: 7bit\n\n" .
                            $message .= "\n\n";
                         
                         
                            $message .= "--{$mime_boundary}\n" .
                            "Content-Type: application/octet-stream;\n" .
                            " name=\"{$files}\"\n" .
                            //"Content-Disposition: attachment;\n" .
                            //" filename=\"{$fileatt_name}\"\n" .
                            "Content-Transfer-Encoding: base64\n\n" .
                            $strContent  .= "\n\n" .
                            "--{$mime_boundary}--\n";
                        // }
                                               
                        

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















                    
                    $qy="insert into custom_drone (name,email,number,application,payload,endurance,rangge,mode,gimbal,landing,controller,kit,files) values ('$name','$email','$number','$application','$payload','$endurance','$rangge','$mode','$gimbal','$landing','$controller','$kit','$filename')";
                    mysqli_query($con,$qy);
                    ?>
                
                
                <script>
                // alert("Your message is added");
                window.open('drones.php','_self');
                
                </script>
                
                <?php
                    
          }

  
      }
      
      else {
        ?>  
        <script>
            alert ("This file extension is not allowed. Please upload a JPEG or PNG or docx or pdf or txt file");
            window.open('drones.php','_self');
        </script>


        <?php

      }
    
    
}
else{










                

    $to="info@advancedvymaniks.com";
    $subject="Apply for Custom Drone By  " . $name ;
    $message="
     Email Send BY  $name,
     Email :- $email,
     Number :- $number,
     Application :- $application,
     payload :- $payload,
     Endurance:- $endurance,
     Range:- $rangge,
     Mode:- $mode,
     Gimbal:- $gimbal,
     Landing:- $landing,
     Controller:- $controller,
     Kit:- $kit
    

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











    $qy="insert into custom_drone (name,email,number,application,payload,endurance,rangge,mode,gimbal,landing,controller,kit) values ('$name','$email','$number','$application','$payload','$endurance','$rangge','$mode','$gimbal','$landing','$controller','$kit')";
    mysqli_query($con,$qy);
    ?>


<script>
// alert("Your message is added");
 window.open('drones.php','_self');

</script>

<?php
    
}








    
    
    
   









   
  

// `name`, `email`, `number`, `message`, `dates`

// mysqli_query($con,$qy);




}

?>










