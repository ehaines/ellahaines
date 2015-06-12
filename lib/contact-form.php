<?php
// start a PHP session for CSRF protection
session_start();
require_once("csrf.php");
require_once("Mail.php");

try {
	if (verifyCsrf($_POST["csrfName"], $_POST["csrfToken"]) === false) {
		throw new RuntimeException("CSRF tokens incorrect or missing. Make sure cookies are enabled.");
		exit();
	}
	//take and sanitize inputs
	$from = $_POST["emailaddress"];
	$from = filter_var($from, FILTER_SANITIZE_EMAIL);

	$subject = $_POST["subject"];
	$subject = filter_var($subject, FILTER_SANITIZE_STRING);
	$subject = "Message from ellahaines.net: $subject";

	$message = $_POST["message"];
	$message = filter_var($message, FILTER_SANITIZE_STRING);

	// build headers
//	$headers = array();
//	$headers["To"] = "haines.ella@gmail.com";
//	$headers["From"] = $from;
//	$headers["Subject"] = $subject;
//	$headers["MIME-Version"] = "1.0";
//	$headers["Content-Type"] = "text/html; charset=UTF-8";

	// send the email
//	error_reporting(E_ALL & ~E_STRICT & ~E_DEPRECATED);
//	$mailer =& Mail::factory("sendmail");
//	$status = $mailer->send($to, $headers, $message);

//	if(PEAR::isError($status) === true)
//	{
//		throw new Exception($status->getMessage());
//	}

	//build headers
	$headers = "From: $from\r\n";
	$headers .= "Reply-To: $from\r\n";

	//send the mail
	$status = mail("haines.ella@gmail.com", $subject, $message, $headers);

	if ($status) {
		echo "<p class='response-message'> Thank you for your message, I will contact you shortly. </p>";
	}
	else throw new Exception($status->getMessage());

}catch(Exception $exception) {
	$message = $exception->getMessage();
	echo "<p class='response-message'>Could not send email: $message; </p>";
}

?>