<?php
	class ServiceFunctions
	{
		public function getDisplayName($first_name, $last_name)
		{
			echo "stuff ";
			$name = '';
			$name .= strtoupper(substr($first_name, 0, 1));
			$name .= ' '. ucfirst($last_name);

			return $name;

		}

		public function countWords($paragraph)
		{
			$words = preg_split('/[. ,!?;]+/', $paragraph);
			return count($words);
		}
	}


	$options = array('uri' => 'http://localhost/');
	$server = new SoapServer(NULL, $options);
	$server->setClass('ServiceFunctions');
	$server->handle();