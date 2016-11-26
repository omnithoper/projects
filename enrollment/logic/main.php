<?php
	$config = parse_ini_file('../../configuration/application.ini');
	$config = !empty($config)?$config:parse_ini_file('../configuration/application.ini');
	
	$config_extended = parse_ini_file('../../configuration/local.ini');
	$config_extended = !empty($config_extended)?$config_extended:parse_ini_file('../configuration/local.ini');

	$config = array_merge($config, $config_extended);

	define('APPLICATION_PATH', $config['root']);

	require_once(APPLICATION_PATH."/logic/connect-db.php");
	require_once(APPLICATION_PATH."/logic/method-post.php");
?>