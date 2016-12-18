<?php
	date_default_timezone_set('UTC');


	set_include_path(get_include_path().';'.__DIR__.'\controller'.';'.__DIR__.'\models');
	#var_dump(get_include_path()); die();

	define('BASE_PATH', __DIR__);
	set_include_path(get_include_path().';'.__DIR__.'\controller'.';'.__DIR__.'\models');


	require 'lib/smarty/Smarty.class.php'; 
	session_start();

	$baseUrl = 'http://anthony.enrollment.com/';

	$requestUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$requestString = substr($requestUrl, strlen($baseUrl));

	list($urlParams, $queryParams) = array_pad(explode('?', $requestString), 2, '');
	$urlParams = explode('/', $urlParams);

	parse_str($queryParams, $requestParams);
	foreach ($requestParams as $field => $value) {
		$_GET[$field] = $value;
	}
	$control = empty($urlParams[0])?null:$urlParams[0];
	$controllerName = $control;
	$controllerName = empty($controllerName)?'Index':$controllerName;
	$controllerName = $controllerName.'Controller';

	$action = empty($urlParams[1])?null:$urlParams[1];
	$actionName = $action;
	$actionName = empty($actionName)?'index':$actionName;
	$actionName = $actionName.'Action';

	
//	print_r($urlParams[0].'/'.$urlParams[1].'.'.tpl);
	spl_autoload_register(function ($class_name) {
	    require_once $class_name . '.php';
	});

	$controller = new $controllerName();
	$controller->$actionName();
	$controller->dispatch($control, $action);
