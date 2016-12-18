<?php
	date_default_timezone_set('UTC');

	define('BASE_PATH', __DIR__);
	set_include_path(get_include_path().PATH_SEPARATOR.__DIR__.DIRECTORY_SEPARATOR.'controller'.PATH_SEPARATOR.__DIR__.DIRECTORY_SEPARATOR.'models');

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

/*
	$control = empty($urlParams[0])?null:$urlParams[0];
	$controllerName = $control;
	$controllerName = empty($controllerName)?'Index':$controllerName;
	$controllerName = $controllerName.'Controller';

	$action = empty($urlParams[1])?null:$urlParams[1];
	$actionName = $action;
	$actionName = empty($actionName)?'index':$actionName;
	$actionName = $actionName.'Action';
*/

	$controllerTemplate = array_shift($urlParams);
	$controllerName = empty($controllerTemplate)?'Index':$controllerTemplate;
	$controllerName = ucfirst($controllerName.'Controller');
	
	$actionTemplate = array_shift($urlParams);
	$actionName = empty($actionTemplate)?'index':$actionTemplate;
	$actionName = strtolower($actionName.'Action');

	spl_autoload_register(function ($class_name) {
	    require_once $class_name . '.php';
	});

	$controller = new $controllerName();
	$controller->$actionName();
	$controller->dispatch($controllerTemplate, $actionTemplate);