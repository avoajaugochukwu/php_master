<html>
	<head>
		<style type="text/css">
			body {font-family: helvetica}
			a {
				padding: 10px;
				background: #0e3042;
				color: #fff;
				text-decoration: none;
				margin-right: 20px;
			}
			a:hover {
				background: #0bd;
			}
		</style>
	</head>

<a href="json-xml.php">json.php</a> 
<a href="curlExtension.php">curlExtension.php</a> 
<a href="web_app_soap/">web_app_soap</a>
<a href="web_app_rpc/">web_app_rpc</a>
<a href="spl_namespace/">spl_namespace</a>
<br><br><br><br><br><br>
<?php

	spl_autoload_register(null, false);

	spl_autoload_extensions('.php, .class.php');

	function classLoader($class)
	{
		$filename = strtolower($class) . '.class.php';
		// $file = 'classes/' . $filename;

		if (!file_exists($filename))
		{
			return false;
		}
		include $filename;
	}

	spl_autoload_register('classLoader');



	
	$courier = new Courier;
	echo '<br>';
	$spanish_couriers = Courier::getCourierByCountry('spain');
	echo "<br><br><br>";

	$myParcel = new Parcel;
	$myParcel->setWeight(5)->setCountry('Peru');
	echo "<br><br><br>";

	$courier->name = 'Avaian Carrier';
	echo $courier->name;
	echo "<br><br><br>";

	$exception = new ExceptionStuff;
	try {
		$exception->ship(5);
		echo 'Good';
	} catch (ParcelException $e) {
		echo 'Parcel weight error:' . $e->getMessage();
	} catch (Exception $e) {
		echo 'Something went wrong' . $e->getMessage();
		exit;
	}
?>

</html>