<?php
	require 'main.php';
	require '../../classes/setting.php';
	require '../../lib/smarty/Smarty.class.php'; 
	
	$dateStart = Request::getParam('date_start');
	$dateEnd = Request::getParam('date_end');
	var_dump($dateStart);

	$addObject = new Settings();
	$result=[];
	
	if (isset($_POST['save'])){
		$result = $addObject->getAddSemester($dateStart, $dateEnd);
	}
	$smarty = new Smarty();
	$smarty->template_dir = '../../templates/student/';
	$smarty->compile_dir = '../../compile/';

	$smarty->assign('result', $result);
	$smarty->assign('dateStart', $dateStart);
	$smarty->assign('dateEnd', $dateEnd);
	$smarty->display('semesterAdd.tpl');
?>


	