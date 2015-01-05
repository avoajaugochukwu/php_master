<?php
	$ch = curl_init('http://api.bitly.com/v3/shorten' . '?login=user&apiKey=secret' . '&longUrl=http%3A%2Fbiito.com');

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$result = curl_exec($ch);

	echo '<pre>';
	print_r(json_encode($result));
	?>