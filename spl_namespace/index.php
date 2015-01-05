<?php
	spl_autoload_register(function ($className)
	{
		$className = ltrim($className, '\\'); //ltrim strip character from beginning of string
		$fileName  ='';
		$namespace = '';
		if ($lastNsPos = strrpos($className, '\\')) { //Find position of last occurence of character
			$namespace   = substr($className, 0, $lastNsPos);
			$className   = substr($className, $lastNsPos + 1);
			$fileName    = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
		
		}
		$fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
		echo $fileName . '<br>';
		require $fileName;
	});

	$main  = new Controller\Main;
	$main1 = new Libs\Main;
?>