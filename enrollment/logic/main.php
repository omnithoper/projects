<?php
	session_start();
	$config = [];
	define('BASE_PATH', __DIR__.'/../');
	if (file_exists('configuration/application.ini')) {
		$config = parse_ini_file('configuration/application.ini');
	} else {
		$config = parse_ini_file(BASE_PATH.'configuration/application.ini');
	}
	
	$config_extended = [];
	if (file_exists('configuration/local.ini')) {
		$config_extended = parse_ini_file('configuration/local.ini');
	} else {
		$config_extended = parse_ini_file(BASE_PATH.'configuration/local.ini');
	}
	
	$config = array_merge($config, $config_extended);

	if (!defined('APPLICATION_PATH')) {
		define('APPLICATION_PATH', $config['root']);
	}

	require_once(APPLICATION_PATH."/logic/connect-db.php");
	require_once(APPLICATION_PATH."/logic/method-post.php");
	require_once(BASE_PATH."classes/admin.php");
	require 'smarty/Smarty.class.php'; 
	$smarty = new Smarty();

	$adminObject = new Admin();

    $result = $adminObject->userSession(); 
    if (empty($_SESSION['login_user'])) {

    		header('Location: /logic/login.php');
	}
?>