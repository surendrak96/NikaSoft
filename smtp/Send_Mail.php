<?php
function Send_Mail($to,$subject,$body)
{
require 'class.phpmailer.php';
$from       = "imsurendra99@gmail.com";
$mail       = new PHPMailer();
$mail->IsSMTP(true);            // use SMTP
$mail->IsHTML(true);
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = 'ssl://smtp.gmail.com'; // Amazon SES server, note "tls://" protocol
$mail->Port       =  '465';                    // set the SMTP port
$mail->Username   = "imsurendra99@gmail.com";  // SMTP  username
$mail->Password   = "eswar2006";  // SMTP password
$mail->SetFrom($from, 'imsurendra99@gmail.com');
$mail->AddReplyTo($from,'imsurendra99@gmail.com');
$mail->Subject    = $subject;
$mail->MsgHTML($body);
$address = $to;
$mail->AddAddress($address, $to);
$mail->Send();   
}
?>
