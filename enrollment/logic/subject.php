<?php
	require '../../logic/main.php';
	require '../../classes/subject.php';
	require '../../lib/smarty/Smarty.class.php'; 
	
	$subjectObject = new Subject();
	$result = $subjectObject->getViewSubjects();
	$result = $result->fetch_all(MYSQLI_ASSOC); 
	
	$smarty = new Smarty();
	$smarty->template_dir = '../../templates/subject/';
	$smarty->compile_dir = '../../templates/subject/';

	$smarty->assign('subject', $result);
	$smarty->display('view.tpl');
?>