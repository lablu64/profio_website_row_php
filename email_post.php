<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include('./src/PHPMailer.php');
include('./src/SMTP.php');
include('./src/Exception.php');


$mail = new PHPMailer(true);

if(isset($_POST['mail_send'])){


    $name = $_POST['name'];
    $email_to = $_POST['email'];
    $message = $_POST['message'];
    $subject = "admin greeting message";
    $body = "Hey there! - $name"."<br>"."we are happy to our kufa community!"."<br>"."<br>"."<br>"."best wishes"."<br>"."KUFA Admin!";

    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                    //Enable SMTP authentication
    $mail->Username   = 'applemahmud09a@gmail.com';                     //SMTP username
    $mail->Password   = 'mhqi nwcu omew lbcb';                               //SMTP password
    $mail->SMTPSecure =  PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('labluislam435@gmail.com', 'Ashik');
    $mail->addAddress( $email_to, $name);    
     //Add a recipient
   
    // $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo($email_to);
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "$subject";
    $mail->Body    = "$body";
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
}














?>