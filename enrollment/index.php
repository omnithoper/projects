<?php
	date_default_timezone_set('UTC');

	set_include_path(get_include_path().':'.__DIR__.'/controller'.':'.__DIR__.'/models');
	require 'smarty/Smarty.class.php'; 
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

	$controllerName = ucfirst(array_shift($urlParams));
	$controllerName = empty($controllerName)?'Index':$controllerName;
	$controllerName = $controllerName.'Controller';

	$actionName = strtolower(array_shift($urlParams));
	$actionName = empty($actionName)?'index':$actionName;
	$actionName = $actionName.'Action';

	spl_autoload_register(function ($class_name) {
	    require_once $class_name . '.php';
	});

	$controller = new $controllerName();
	$controller->$actionName();