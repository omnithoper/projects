<?php 
	require 'lib/smarty/Smarty.class.php'; 

	$smarty = new Smarty();
	$smarty->template_dir = 'templates/student/';
	$smarty->compile_dir = 'templates/student/';

	$smarty->display('mainpage.tpl');
?>