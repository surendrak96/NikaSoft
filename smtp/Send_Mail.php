<?php
function Send_Mail($to,$subject,$body)
{
require 'class.phpmailer.php';
$from       = "example@gmail.com";
$mail       = new PHPMailer();
$mail->IsSMTP(true);            // use SMTP
$mail->IsHTML(true);
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = 'ssl://smtp.gmail.com'; // Amazon SES server, note "tls://" protocol
$mail->Port       =  '465';                    // set the SMTP port
$mail->Username   = "example@gmail.com";  // SMTP  username
$mail->Password   = "xxxxxxxxxxxxxxx";  // SMTP password
$mail->SetFrom($from, 'example@gmail.com');
$mail->AddReplyTo($from,'example@gmail.com');
$mail->Subject    = $subject;
$mail->MsgHTML($body);
$address = $to;
$mail->AddAddress($address, $to);
$mail->Send();   
}
?>
