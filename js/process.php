<?php

    // echo "<pre>";print_r($_POST);die;
    $name = $_POST['name'];
    $mailsubject = $_POST['subject'];
    $messageDes = $_POST['message'];
    $email = $_POST['email'];
    
    // $to = "info@roomsinmedaram.com"; // Change this email
    $subject = "Enquiry";
    $message = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\Subject: $mailsubject\n\nMessage: $messageDes";
    
    
    // Set your email address where you want to receive emails. 
    // $to = 'abr.group.61@gmail.com';
    $to = 'koushikkrishna.boddu@gmail.com';
    $headers = "From:" . $_POST["email"] . "\r\n";
    
    $headers = $headers . "MIME-Version: 1.0" . "\r\n";
    $headers = $headers . "Content-type: text/html; Charset=iso-8859-1" . "\r\n";
    
    $headers = "From: ".$name;
    $mail_status = mail($to,$subject,$message,$headers);
    // echo "<pre>";print_r($mail_status);
    echo json_encode(array('status'=>$mail_status));

?>
