<?php 

/**
 * A view loading function: Loads the view of a particular page, example:
 * contact.php controller loads the contact.view.php view at the end of its execution. 
 */
function view($path, $data = null) {

	if ($data) {
		extract($data);
	}
	
	$path .= '.view.php'; // the view we want to load
	
	include 'views/layout.php'; // this then 'includes' the $path.view.php
	
}




