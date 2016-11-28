<?php
	require '../../logic/main.php';
	require '../../classes/setting.php';
	require '../../lib/smarty/Smarty.class.php'; 
	
	$settingObject = new Settings();
	$result = $settingObject->getViewTotalPayment();
	$semester = $settingObject->getViewAllSemester(); 
	$smarty = new Smarty();
	$smarty->template_dir = '../../templates/setting/';
	$smarty->compile_dir = '../../compile/';

	$smarty->assign('result', $result);
	$smarty->assign('semester', $semester);
	
	$smarty->display('view.tpl');
?>