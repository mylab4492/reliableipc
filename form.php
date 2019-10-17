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

// php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 2;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
// Check if file already exists
if(!empty($_FILES["fileToUpload"]["name"])){
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
echo '<script language="javascript">';
echo 'alert("Sorry, your file is too large.")';
echo '</script>';
    $uploadOk = 0;
}
// Allow certain file formats
//if($imageFileType != "pdf" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "doc" && $imageFileType != "docx" && $imageFileType != "ppt" && $imageFileType != "pptx"
//&& $imageFileType != "jpg" ) {
//    echo "Sorry, only pdf, JPEG, PNG & JPG files are allowed.";
 //   $uploadOk = 0;
//}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
echo '<script language="javascript">';
echo 'history.go(-1)';
echo '</script>';
		die('Error: error');
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		$uploadOk = 1;
    } else {
		
		echo '<script language="javascript">';
        echo "Sorry, there was an error uploading your file.";
		echo '</script>';
echo '<script language="javascript">';
echo 'history.go(-1)';
echo '</script>';
		die('Error: error');
    }
}
}

$msg=$_POST["message"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$name = $_POST["name"];
$messages = "Name: "."\n".$name."\n" ."Mobile: "."\n".$mobile."\n"."Email: "."\n".$email."\n"."Requirement: "."\n".$msg;
// mail
$message .= '<html><body>';
$message .= '<img src="http://www.reliableipc.com/images/logo.png" alt="Website Request" />';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
$message .= "<tr><td><strong>Mobile:</strong> </td><td>" . $mobile . "</td></tr>";
$message .= "<tr><td><strong>Requirement:</strong> </td><td>" . $msg . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";
$mail = new PHPMailer(true);
ini_set('display_errors', 1);
//$mail->IsSMTP();
$mail->SMTPAuth = 'tls';
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->Username = "sadiquekhan449@gmail.com";
$mail->Password = "Original123";
$mailSent = 1;
$messageSent = 1;
$mail->SetFrom('sadiquekhan449@gmail.com', 'Relialeipc.com');
$mail->Subject = "A Requirement is placed on Website";
$mail->MsgHTML($message);
if($uploadOk == 1)
$mail->addAttachment($target_file);
$mail->AddAddress('haniya.usmani@gmail.com', 'aziz');
if($mail->Send()) {
	unlink($target_file);
	mailSent = 1;
  echo "Mail sent!";
} else {
  echo "Mailer Error: " . $mail->ErrorInfo;
  $mailSent = 0;
}

//  To redirect form on a particular page
if($mailSent == 1){
echo '<script language="javascript">';
echo 'alert("Requirement recieved we will contact you shortly !")';
echo '</script>';
echo '<script language="javascript">';
echo 'history.go(-2)';
echo '</script>';
}
}
    

?>