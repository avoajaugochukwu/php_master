<?php
	require 'ServiceFunctions.class.php';


	

	$options = array(
								'uri' => 'http://localhost',
								'location' => 'http://localhost/next/tutorials/php_master/web_app_soap/ServiceFunctions.class.php',
								'trace' => 1);
	$client = new SoapClient(NULL, $options);
	echo $client->getDisplayName('Joe', 'Bloggs');

	// print_r($client->getLastRequest());


?>