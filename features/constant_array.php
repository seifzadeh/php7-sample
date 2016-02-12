<?php

define('SUCCESS',0);
define('FILE_NOT_FOUND',1);
define('DATABASE_NOT_EXISTS',2);

define('ERR',[
	FILE_NOT_FOUND=>'config file not found, run install.php',
	DATABASE_NOT_EXISTS=>'database not eists. create new database.'
	]);


function connect_to_db( $config_file ):int {

	if(!file_exists($config_file))
		return FILE_NOT_FOUND;

	return SUCCESS;
}

$is_connect = connect_to_db('/etc/php7test.ini');
if($is_connect != SUCCESS)
	echo ERR[$is_connect];

?>