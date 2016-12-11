<?php
	require  'main.php';
	require 'session.php';
	require  '../../classes/subject.php';
	require '../../lib/smarty/Smarty.class.php'; 

	$subject = Request::getParam('subject');
	$lecUnit = Request::getParam('lec_unit');
	$labUnit = Request::getParam('lab_unit');
	$subjectUnit = Request::getParam('subject_unit');
	
	$result = [];
	$addObject = new Subject();

	if (isset($_POST['save'])) {
		$result = $addObject->getAddSubject($subject, $lecUnit, $labUnit, $subjectUnit);
	}
	
	$smarty = new Smarty();
	$smarty->template_dir = '../../templates/subject/';
	$smarty->compile_dir = '../../compile/';

	$smarty->assign('result', $result);
	$smarty->display('subjectAdd.tpl');
?>
