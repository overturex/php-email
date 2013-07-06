<?php include("email-sender.php"); ?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Send Email</title>
<link href="email.css" rel="stylesheet" type="text/css">
</head>

<?php
	define("EMAIL_FROM", "inan@ikaymaz.ca");
	
	if(isset($_POST['submit']))
	{
		sendEmail(EMAIL_FROM , $_POST['to'], $_POST['subject'], $_POST['message']);
				  
		echo "<p class=\"sent\">e-mail sent!<p/>";

	}

?>

<body>

	<form action="email.php" method="post" name="form" >
        <div>
        	<label>To:</label><input type="text" name="to" id="to">
       	</div>
        <div>
        	<label>Subject:</label><input type="text" name="subject" id="subject">
       	</div>
        <div>
        	<p><label>Message:<p></label><textarea name="message" cols="30" rows="4" id="message"></textarea></span></p>
       	</div>
        <div>
        	<button type="submit" name="submit" value="submit">SEND</button>
        </div>

    </form>


</body>
</html>