<?php

/**
 * http://php.net/manual/en/migration70.new-features.php
 */

function connect_to_web(string $url):int {

	try {

		$data = file_get_contents($url);
		if($data)
			return file_put_contents('data/dret_'.time().'.json', "$data\n");
		
	} catch (Exception $e) {
		
		return -1;
	}
}

$get_user_info = connect_to_web('http://ipinfo.io/json');
if($get_user_info < 0 ) {

	echo "failed get data from the web !!!";
	exit(-1);
	
}

echo "get data from the web, $get_user_info\n";



?>