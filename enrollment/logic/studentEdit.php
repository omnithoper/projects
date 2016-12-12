<?php
	require 'main.php';

	$db = new DatabaseConnect();

	$studentID = Request::getParam('student_id');
	$studentID = (empty($studentID) && !empty($_POST['student_id']))?$_POST['student_id']:$studentID;
	
	$editObject = new Student();
	$result = $editObject->getViewStudent($studentID);
	$edit = [];
	if (isset($_POST['edit'])) {
		$firstName = Request::getParam('first_name');
		$lastName = Request::getParam('last_name');
		$edit = $editObject->getEditStudent($firstName, $lastName, $studentID);
		
	}
	
	$smarty = new Smarty();
	$smarty->template_dir = '../../templates/student/';
	$smarty->compile_dir = '../../compile/';
	
	$smarty->assign('result', $result);
	$smarty->assign('edit', $edit);
	$smarty->display('studentEdit.tpl');

?>

