<?php
	require 'main.php';
	require '../../classes/student.php';
	require '../../lib/smarty/Smarty.class.php'; 
	
	$firstName = Request::getParam('first_name');
	$lastName = Request::getParam('last_name');

	$addObject = new Student();
	$result=[];
	
	if (isset($_POST['save'])){
		$result = $addObject->getAddStudent($firstName, $lastName);
	}
	$smarty = new Smarty();
	$smarty->template_dir = '../../templates/student/';
	$smarty->compile_dir = '../../templates/student/';

	$smarty->assign('result', $result);
	$smarty->display('studentAdd.tpl');
?>


	

