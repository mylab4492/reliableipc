<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>Enquiry Form</title>
</head>
	<title>Send mail Form</title>
<body>

		
</body>

</html>


<?php 

require ('php/Exception.php');
require ('php/PHPMailer.php');
require ('php/SMTP.php');
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "sadiquekhan449@gmail.com";
$mail->Password = "Original@4492";
$mail->SetFrom("sadiquekhan449@gmail@gmail.com");
$mail->Subject = "Test";
$mail->Body = "hello";
$mail->AddAddress("sadiquekhan449@gmail@gmail.com");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
    

?>