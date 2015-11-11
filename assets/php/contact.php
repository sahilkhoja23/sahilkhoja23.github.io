<?php

if(isset($_POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
    
	
	$to      = 'sk938@cornell.edu';
	$subject = 'someone hit you up';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){	
		$res['sendstatus'] = 'done';
	
		//Edit your message here
		$res['message'] = 'Thanks!';
    }
	else{
		$res['message'] = 'Failed to send mail. Please mail me to sk938@cornell.edu';
	}
	
	
	echo json_encode($res);
}

?>