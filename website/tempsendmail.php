<?php
require("class.PHPMailer.php");
include "config.php";
if(isset($_POST['submit']))
{
    $filename=$_FILES['fileBrowser']['name'];
    $content=$_POST['textcontent'];
    $institutename=$_POST['institutename'];
    
    
}
    /*
    $mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "smtp1.example.com;smtp2.example.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "jswan";  // SMTP username
$mail->Password = "secret"; // SMTP password

$mail->From = "from@example.com";
$mail->FromName = "Mailer";
$mail->AddAddress("josh@example.net", "Josh Adams");
$mail->AddAddress("ellen@example.com");                  // name is optional
$mail->AddReplyTo("info@example.com", "Information");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Here is the subject";
$mail->Body    = "This is the HTML message body <b>in bold!</b>";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
    
}
else
    header("location:sendmail.php");
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
