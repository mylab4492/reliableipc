<!DOCTYPE html>
<html>
<body>
<?php
	// Account details
	$apiKey = urlencode('iJdkVMsQp2Q-8rHxKRrGjbYrclbTWL1PN7zBjmUDmg');
	
	// Message details
	$numbers = array(919167039216);
	$sender = urlencode('TXTLCL');
	$message = rawurlencode('This is your message');
 
	$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	echo $response;
?>

</body>
</html>
