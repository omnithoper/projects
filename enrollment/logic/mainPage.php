<?php 
	$config = parse_ini_file('configuration/application.ini');
	require 'lib/smarty/Smarty.class.php'; 

	$smarty = new Smarty();
	$smarty->template_dir = 'templates/student/';
	$smarty->compile_dir = 'compile';
	$smarty->caching = 0;

	$smarty->display('mainpage.tpl');
?>