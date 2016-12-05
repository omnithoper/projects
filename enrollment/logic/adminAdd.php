<?php
	require 'main.php';
	require '../../classes/admin.php';
	require '../../lib/smarty/Smarty.class.php'; 
	
	$userName = Request::getParam('username');
	$password = Request::getParam('password');


	$addObject = new Admin();
	$result=[];
	
	if (isset($_POST['save'])){
		$result = $addObject->getAddUser($userName, $password);
	}
	$smarty = new Smarty();
	$smarty->template_dir = '../../templates/admin/';
	$smarty->compile_dir = '../../compile/';

	$smarty->assign('result', $result);
	$smarty->assign('username', $userName);
	$smarty->assign('password', $password);
	$smarty->display('adminAdd.tpl');
?>

