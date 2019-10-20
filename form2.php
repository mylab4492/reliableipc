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
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta Tags -->
	<!-- Stylesheet -->
	<!--// Stylesheet -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<!-- Slider -->
<link rel="stylesheet" href="css/mainStyles.css" />
<!-- //Slider -->
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link href='css/simplelightbox.min.css' rel='stylesheet' type='text/css'> 
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/formstyle.css" rel='stylesheet' type='text/css' />
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Raleway:400,500,700,800,900" rel="stylesheet">
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
	<!--//fonts-->
</head>

<body>

	<!--background-->
	<!-- Contact form -->
	<div class="contact-main-w3-agile">
		<div class="top-section-wthree">
			<h2 class="sub-title">Contact Us</h2>
			<p>We are available to answer all your questions.</p>
		</div>
		<div class="form-agileits-w3layouts">
			<form action="#" id="sms_form" method="post" enctype="multipart/form-data">
				<div class="form-w3layouts-fields">
					<input type="text" name="name" placeholder="Name" required="" />
				</div>
				<div class="form-w3layouts-fields">
					<input type="text" name="company" placeholder="Company Name" required="" />
				</div>
				<div class="form-w3layouts-fields">
					<input type="email" name="email" placeholder="Email" required="" />
				</div>
				<div class="form-w3layouts-fields">
					<input type="text" name="mobile" placeholder="Phone" required="" />
				</div>
				<div class="form-w3layouts-fields">
					<textarea name="message" placeholder="Message" required=""></textarea>
				</div>
				<div class="form-w3layouts-fields">         
				<input type="file" placeholder="Message" name="fileToUpload" />
				</div>
				<div class="form-w3layouts-fields">
                  <input type="submit" name="SubmitButton"/>
				</div>
			</form
		</div>
	</div>
		<!-- // Contact form -->
	<div class="clear"></div>
	<!--//background-->
</body>

</html>


<?php 


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['SubmitButton']))

{
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
}
    

?>