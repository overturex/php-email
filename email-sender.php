<?php
	function clean_string($value)
	{
		return mysql_real_escape_string($value);
	}
?>

<?php
	function sendEmail($email_from, $email_to, $email_subject, $e_message)
	{
		$email_message = "New e-mail! E-mail details below." . "\n";
		
		$email_message .= "Message: ". $e_message . "\n";
		
		// create email headers
		$headers = 'From: '.$email_from."\r\n".
		'Reply-To: '.$email_from."\r\n" .
		'X-Mailer: PHP/' . phpversion();
		@mail($email_to, $email_subject, $email_message, $headers);
		
		
	}
	
	

?>