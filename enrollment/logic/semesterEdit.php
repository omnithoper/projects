<?php
	require  'main.php';
	require  '../../classes/setting.php';
	require '../../lib/smarty/Smarty.class.php'; 

	$db = new DatabaseConnect();

	$semesterID = Request::getParam('semester_id');
	$semesterID = (empty($semestID) && !empty($_POST['semester_id']))?$_POST['semester_id']:$semesterID;


	$editObject = new Settings();
	$view = $editObject->getViewSemester($semesterID);

	$edit = [];
	if (isset($_POST['edit'])) {
		$dateStart = Request::getParam('date_start');
		$dateEnd = Request::getParam('date_end');
		$edit = $editObject->getEditSemester($dateStart, $dateEnd, $semesterID);

	}

	$smarty = new Smarty();
	$smarty->template_dir = '../../templates/subject/';
	$smarty->compile_dir = '../../compile/';
	
	$smarty->assign('view', $view);
	$smarty->assign('edit', $edit);
	$smarty->display('semesterEdit.tpl');
?>
