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
	$from = $_POST["email-address"];
	$from = filter_var($from, FILTER_SANITIZE_EMAIL);

	$subject = $_POST["subject"];
	$subject = filter_var($subject, FILTER_SANITIZE_STRING);

	$message = $_POST["message"];
	$message = filter_var($message, FILTER_SANITIZE_STRING);

	// build headers
	$headers = array();
	$headers["To"] = 'haines.ella@gmail.com';
	$headers["From"] = $from;
	$headers["Subject"] = $subject;
	$headers["MIME-Version"] = "1.0";
	$headers["Content-Type"] = "text/html; charset=UTF-8";

	// send the email
	error_reporting(E_ALL & ~E_STRICT & ~E_DEPRECATED);
	$mailer =& Mail::factory("sendmail");
	$status = $mailer->send($to, $headers, $message);
	if(PEAR::isError($status) === true)
	{
		 throw new Exception($status->getMessage());
	}


}catch(Exception $exception) {
	$message = $exception->getMessage();
	echo "<li class='alert alert-danger'>Could not send email: $message; </li>";
}

?>