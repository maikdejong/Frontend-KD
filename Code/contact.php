<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = 'Maik';
	$email_subject = 'Nieuw bericht';
	$email_body = "Name: $name.\n".
				  "Email: $email.\n".
				  "Message: $message.\n";

	$to ="maik@maik.fc.school";
	$headers = "From: $email_from \r\n";
	$headers .= "Reply-To: $email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("location: success.html");
?>