<?php

//var_dump("ALL FIELDS ARE EMPTY");
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message'])) {
	die('Error: Missing variables');
}else{

    $name		=	strip_tags($_POST['name']);
	$email		=	strip_tags($_POST['email']);
	$subject	    =	strip_tags($_POST['subject']);
	$message	=	$_POST['message'];
	$adminemail	=	$_POST['adminemail'];
	
	/** Put Your Email address here. info@themeapt.com **/
	
	$to= $adminemail; 
/* 	$to= 'shaid1985@gmail.com'; */

		
	$headers = "From: " . $email . "\r\n";
	$headers .= "Reply-To: ". $email . "\r\n";

	
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'X-Mailer: PHP/' . phpversion();

	
	
	$body='You have got a new message from the contact form on your website. Here is detail: '."<br/>";
	$body.='Name: '.$name."<br/>";
	$body.='Email: '.$email."<br/>";
	// $body.='Phone: '.$phone."<br/>";

	$body.='Message: '."<br/>".$message."<br/><br/>";
			
	if(mail($to, $subject, $body, $headers)) {
		echo "success";
	} else {
		echo "failed";
	}
	
}

?>