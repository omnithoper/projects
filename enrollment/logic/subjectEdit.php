<?php
	require  'main.php';
	require  '/../../classes/subject.php';
	require '../../lib/smarty/Smarty.class.php'; 

	$db = new DatabaseConnect();

	$subjectID = Request::getParam('subject_id');
	$subjectID = (empty($subjectID) && !empty($_POST['subject_id']))?$_POST['subject_id']:$subjectID;


	$editObject = new Subject();
	$view = $editObject->getViewSubject($subjectID);

	$edit = [];
	if (isset($_POST['edit'])) {
		$subject = Request::getParam('subject');
		$subjectUnit = Request::getParam('subject_unit');
		$edit = $editObject->getEditSubject($subject, $subjectUnit, $subjectID);
	}

	$smarty = new Smarty();
	$smarty->template_dir = '../../templates/subject/';
	$smarty->compile_dir = '../../templates/subject/';
	
	$smarty->assign('view', $view);
	$smarty->assign('edit', $edit);
	$smarty->display('subjectEdit.tpl');
?>
