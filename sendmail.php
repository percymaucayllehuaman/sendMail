<?php

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
// require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.zoho.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'mesadepartes@munisanjeronimo.gob.pe';                     //SMTP username
    $mail->Password   = 'mesa35PARTES#';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('mesadepartes@munisanjeronimo.gob.pe', 'Mesa de Partes de la Municipalidad Distrital San Jeronimo');
    $mail->addAddress('pmaucayllehuaman@gmail.com', 'Name');     //Add a recipient  Name is optional
    $mail->addAddress('pmaucayllehuaman@munisanjeronimo.gob.pe');               //Name is optional
    // $mail->addAddress('tavanhuong2403@gmail.com');
    // $mail->addAddress('tvhd5dl@gmail.com');
    $mail->addAddress('carmen.vicenteoscco@gmail.com');
    $mail->addReplyTo('mesadepartes@munisanjeronimo.gob.pe', 'Information');
    
    
    
    // $mail->addCC('cc@munisanjeronimo.gob.pe');
    // $mail->addBCC('bcc@munisanjeronimo.gob.pe');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject mail send mail';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}




// header('location: index.php');