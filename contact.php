<?php 
require('functions.php');

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

	$user_came_from = $_SERVER['HTTP_REFERER'] ? $_SERVER['HTTP_REFERER'] : '';

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

		$data = array(
			'error' => $error,
			'contact_name' => $contact_name,
			'contact_email' => $contact_email,
			'contact_message' => $contact_message,
			'email_invalid' => $email_invalid
		);

		if ($user_came_from == "resume.php") {
			view('resume', $data);
		} else {
			view('index', $data);
		}
	
	} else {

		// send the email somwhere
		if (mail("paulpires101@gmail.com", "paulpires.com message", "From: $contact_name ($contact_email) ::::: $contact_message")) {

			header("Location: home?thanks");

		} else {

			$error = 1;
			$vals_to_pass_on = array(
				'error' => $error,
				'contact_name' => $contact_name,
				'contact_email' => $contact_email,
				'contact_message' => $contact_message,
				'email_invalid' => $email_invalid,
				'mailError' => $mailError
			);

			if ($user_came_from == "resume.php") {
				view('resume', $vals_to_pass_on);
			} else {
				view('index', $vals_to_pass_on);
			}

		}

	}

} else {
	header("Location: home");
}
