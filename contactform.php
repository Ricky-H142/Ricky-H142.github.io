<?php
    $name= $_POST['fullname'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    
    $from = 'rickyhuang486@gmail.com';
    $subject = "New Email from Website";
    $to = "r83huang@uwaterloo.ca"
    
    $headers = "From: ".$email_from;
    $headers .= "Reply-To: ".$visitor_email;
    $body= "You have recieved an e-mail from ".$name.".\n\n".$message;

    mail($to,$subject,$body,$headers);

    header("Location: index.html");
?>