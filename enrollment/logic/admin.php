<?php
	require '../../logic/main.php';
	require '../../classes/admin.php';
	require '../../lib/smarty/Smarty.class.php';

	$adminObject = new Admin();
	$result = $adminObject->getViewadmin();
	
	$smarty = new Smarty();
	$smarty->template_dir = '../../templates/admin/';
	$smarty->compile_dir = '../../compile/';

	$smarty->assign('result', $result);
	$smarty->display('view.tpl');
?>