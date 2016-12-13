<?php
	require 'main.php';
	
	$userName = Request::getParam('username');
	$password = Request::getParam('password');


	$addObject = new Admin();
	$result=[];
	
	if (isset($_POST['save'])){
		$result = $addObject->getAddAdmin($userName, $password);
	}
	$smarty = new Smarty();
	$smarty->template_dir = '../../templates/admin/';
	$smarty->compile_dir = '../../compile/';

	$smarty->assign('result', $result);
	$smarty->assign('username', $userName);
	$smarty->assign('password', $password);
	$smarty->display('adminAdd.tpl');
?>

