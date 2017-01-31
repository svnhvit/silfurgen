<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'Silfurgen'; 
		$to = 'svanhvitj@gmail.com'; 
		$subject = 'Message from Silfurgen.is';
		
		$body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Vinsamlegast sláið inn nafn';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Vinsamlegast sláið inn gilt tölvupóstfang';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Vinsamlegast sláið inn skilaboð';
		}
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Takk fyrir! Við höfum samband.</div>';
	} else {
		$result='<div class="alert alert-danger">Því miður tókst ekki að senda skilaboðin. Vinsamlegast reynið aftur.</div>';
	}
}
	}
?>