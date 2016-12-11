<?php
	#require 'main.php';
	#require 'session.php';


	$adminObject = new Admin();
	$result = $adminObject->getViewadmin();
	
	$smarty->template_dir = '../../templates/admin/';
	$smarty->compile_dir = '../../compile/';

	$smarty->assign('result', $result);
	$smarty->display('view.tpl');
?>