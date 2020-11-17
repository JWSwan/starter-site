<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];
	
	
	$email_from = 'jws@judeswanson.com';
	
	$email_subject = "New Form Submission from your website";
	
	$email_body = "Name: ".$name. " Email: ". $visitor_email. " Message: ".$message;
						
	$to = "jude.the.swanson@gmail.com";
	
	$headers = "From: $email_from \r\n";
	$headers .= "Reply-to: $visitor_email \r\n";
	
	
	mail($to, $email_subject, $email_body, $headers);
	
	header("Location: contact.html");

?>