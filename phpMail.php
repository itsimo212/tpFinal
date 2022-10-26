<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'emailtestgrpa17@gmail.com';                     //SMTP username
    $mail->Password   = 'vqooafbktqoyhsid';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom("emailtestgrpa17@gmail.com", 'Societe générale');
    $mail->addAddress("receveurmailtest@gmail.com");     //Add a recipient
    //$mail->addAddress('receveurmailtest@gmail.com');               //Name is optional
    //$mail->addReplyTo('emailtestgrpa17@gmail.com');
    //$mail->addCC('emailtestgrpa17@gmail.com');
    //$mail->addBCC('emailtestgrpa17@gmail.com');

    //Attachments
    //$mail->addAttachment('');         //Add attachments
    //$mail->addAttachment('');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Votre demande de reintialisation de mdp";
    $mail->Body    = "Votre adresse mail est :  $email. <br> Vous pouvez cliquez sur ce <a href = '$url'>lien</a> pour reintialiser votre mdp";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
    $mail->send();
     echo "<script>alert('Email envoyé'); window.location='index.php'</script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    ?>