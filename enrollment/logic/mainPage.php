<?php 
	$config = parse_ini_file('configuration/application.ini');
	require 'lib/smarty/Smarty.class.php'; 

	$smarty = new Smarty();
	$smarty->template_dir = 'templates/student/';
	$smarty->compile_dir = 'templates/student/';

	$smarty->display('mainpage.tpl');
?>