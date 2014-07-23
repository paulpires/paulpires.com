<?php 
require('functions.php');

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

	$contact_name    = trim($_POST['contact_name']);
	$contact_email   = trim($_POST['contact_email']);
	$contact_message = trim($_POST['contact_message']);
	$error           = 0;
	$email_invalid   = 0;

	if ( empty($contact_name) || empty($contact_email) || empty($contact_message) ) {
		$error = 1;
	}

	if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $contact_email)) {
		$error = 1;
		$email_invalid = 1;
	}

	if ($error) {

		view('index', array(
			'error' => $error,
			'contact_name' => $contact_name,
			'contact_email' => $contact_email,
			'contact_message' => $contact_message,
			'email_invalid' => $email_invalid
		));

	} else {

		// send the email somwhere
		if (mail("paulpires101@gmail.com", "paulpires.com message", "From: $contact_name ($contact_email) ::::: $contact_message")) {

			header("Location: index.php?thanks");

		} else {

			$error = 1;
			view('index', array(
				'error' => $error,
				'contact_name' => $contact_name,
				'contact_email' => $contact_email,
				'contact_message' => $contact_message,
				'email_invalid' => $email_invalid,
				'mailError' => $mailError
			));

		}

	}

} else {

	header("Location: index.php");
	
}
