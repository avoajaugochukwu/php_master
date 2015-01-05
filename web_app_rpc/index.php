<?php

	/**
	*This example uses GET somany use POST because of the limitation of length of URL
	*/
	require 'ServiceFunctions.class.php';

	if (isset($_GET['method'])) {
		switch ($_GET['method']) {
			case 'countWords':
				$response = ServiceFunctions::countWords($_GET['words']);
				break;
			
			case 'getDisplayName':
				$response = ServiceFunctions::getDisplayName($_GET['first_name'], $_GET['last_name']);
				break;

			default:
				$response = 'Unknown method';
				break;
		}
	} else {
		$response = 'Unknown what';
	}

	header('Content-Type: application/json');
	echo json_encode($response);



	// http://localhost/next/tutorials/php_master/web_app_rpc/?method=countWords&words=Mary%20had%20a%20little%20lamb


	// http://localhost/next/tutorials/php_master/web_app_rpc/?method=getDisplayName&first_name=Jane&last_name=Doe