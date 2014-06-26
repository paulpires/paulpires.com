<?php 
require('functions.php');

$contact_name    = $_POST['contact_name'];
$contact_email   = $_POST['contact_email'];
$contact_message = $_POST['contact_message'];

// save the message or email it to myself?

// echo $contact_name;
// echo $contact_email;
// echo $contact_message;

view('index');

