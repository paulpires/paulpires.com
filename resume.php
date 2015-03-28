<?php 

require('functions.php');

if (isset($_GET['thanks'])) {
	view('resume', array(
		'thanks' => $_GET['thanks']
	));
} else {
	view('resume');
}
