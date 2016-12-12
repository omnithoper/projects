<?php
	require 'main.php';

	$subjectObject = new Subject();
	$result = $subjectObject->getViewSubjects();
	$result = $result->fetch_all(MYSQLI_ASSOC); 
	
	$smarty = new Smarty();
	$smarty->template_dir = '../../templates/subject/';
	$smarty->compile_dir = '../../compile/';

	$smarty->assign('subject', $result);
	$smarty->display('view.tpl');
?>