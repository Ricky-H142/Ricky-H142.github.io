<?php
    $name= $_POST['fullname'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'rickyhuang486@gmail.com';

    $email_subject = "New Email from Website";

    $email_body= "User Name: $name.\n"
                    "User Email: $visitor_email.\n"
                        "User Message: $message.\n"

    $to = "r83huang@uwaterloo.ca"

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
?>