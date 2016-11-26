<?php
	require  'main.php';
	require  '../../classes/subject.php';
	require '../../lib/smarty/Smarty.class.php'; 

	$subject = Request::getParam('subject');
	$subjectUnit = Request::getParam('subject_unit');
	$result = [];
	$addObject = new Subject();
	
	if (isset($_POST['save'])) {
		$result = $addObject->getAddSubject($subject, $subjectUnit);
	}
	
	$smarty = new Smarty();
	$smarty->template_dir = '../../templates/subject/';
	$smarty->compile_dir = '../../templates/subject/';

	$smarty->assign('result', $result);
	$smarty->display('subjectAdd.tpl');
?>
