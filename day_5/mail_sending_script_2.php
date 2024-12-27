<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['name'];
    $gmail=$_POST['gmail'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $to ="prakash875478@gmail.com";
    $headers="Form" $gmail;
    if(mail($to,$subject,$message,$headers))
    {
        echo "Email send successfully";

    }
    else{
        echo "Email Not sending";
    }

}
   
?>