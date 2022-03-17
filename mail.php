<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  
require 'vendor/autoload.php';
  
$mail = new PHPMailer(true);
  
try {
    $mail->SMTPDebug = 0;                                       
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com;';                    
    $mail->SMTPAuth   = true;                             
    $mail->Username   = 'jumexup.app@gmail.com';
    $mail->Password   = 'jumexup.app2021';                         
    $mail->SMTPSecure = 'tls';                              
    $mail->Port       = 587;  
  
    $mail->setFrom('folbe22.ilhamfadli@gmail.com', 'FOLBE22 ILHAM FADLI');           
    $mail->addAddress($_POST['email']);
       
    $mail->isHTML(true);                                  
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['message'];
    $mail->send();
    echo "Mail has been sent successfully!";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}