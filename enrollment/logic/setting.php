<?php
	require '../../logic/main.php';
	require '../../classes/setting.php';
	require '../../lib/smarty/Smarty.class.php'; 
 	date_default_timezone_set("Asia/Manila");
	$date = date("20y-m-d");
	var_dump($date);
	$settingObject = new Settings();
	$result = $settingObject->getViewTotalPayment();
	$semester = $settingObject->getViewAllSemester(); 

	$smarty = new Smarty();
	$smarty->template_dir = '../../templates/setting/';
	$smarty->compile_dir = '../../compile/';

	$smarty->assign('result', $result);
	$smarty->assign('semester', $semester);
	$smarty->assign('date', $date);
	
	$smarty->display('view.tpl');
?>