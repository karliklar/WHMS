<?php
	  $email_subject = "Contact Us Request";
    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $phoneno = @trim(stripslashes($_POST['phoneno']));
	$subject = @trim(stripslashes($_POST['subject']));
    $message = @trim(stripslashes($_POST['message'])); 
    $email_from = $email;
	$email_to = 'karlik@woodlandhillspharmacy.com, stevel@woodlandhillspharmacy.com';
   
	$body =
	$body = 'Contact Form request from ' .  $name . "\n\n" .  
		'Contact Info: ' . $email . ',  ' . $phoneno . "\n\n" . 
		'Subject: ' . $subject . "\n\n" . 
		'Message: ' . $message . "\n\n" .  "\n\n"; 
	
	

	 $success = @mail($email_to, $email_subject, $body, 'From: <'.$email_from.'>');
	 header("Location: thankyou.html")
?>	