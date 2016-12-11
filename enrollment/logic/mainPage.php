<?php 
	$config = parse_ini_file('configuration/application.ini');

	require 'main.php';
	require 'session.php';

	$smarty->template_dir = 'templates/student/';
	$smarty->compile_dir = 'compile';
	$smarty->caching = 0;

	$smarty->display('mainpage.tpl');
?>