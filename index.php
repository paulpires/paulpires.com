<?php 

require('functions.php');

if (isset($_GET['thanks'])) {
	
	view('index', array(
		'thanks' => $_GET['thanks']
	));

} else {

	view('index');

}

