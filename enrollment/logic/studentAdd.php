<?php
	require 'main.php';
	
	$firstName = Request::getParam('first_name');
	$lastName = Request::getParam('last_name');

	$addObject = new Student();
	$result=[];
	
	if (isset($_POST['save'])){
		$result = $addObject->getAddStudent($firstName, $lastName);
	}
	$smarty = new Smarty();
	$smarty->template_dir = '../../templates/student/';
	$smarty->compile_dir = '../../compile/';

	$smarty->assign('result', $result);
	$smarty->display('studentAdd.tpl');
?>


	

