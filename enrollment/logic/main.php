<?php
	$config = [];
	if (file_exists('../configuration/application.ini')) {
		$config = parse_ini_file('../configuration/application.ini');
	} else {
		$config = parse_ini_file('../../configuration/application.ini');
	}
	
	$config_extended = [];
	if (file_exists('../configuration/local.ini')) {
		$config_extended = parse_ini_file('../configuration/local.ini');
	} else {
		$config_extended = parse_ini_file('../../configuration/local.ini');
	}
	
	$config = array_merge($config, $config_extended);

	define('APPLICATION_PATH', $config['root']);

	require_once(APPLICATION_PATH."/logic/connect-db.php");
	require_once(APPLICATION_PATH."/logic/method-post.php");
?>