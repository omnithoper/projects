<?php
	require  'main.php';

	$db = new DatabaseConnect();

	$userID = Request::getParam('user_id');
	$userID = (empty($userID) && !empty($_POST['user_id']))?$_POST['user_id']:$userID;


	$editObject = new Admin();
	$view = $editObject->getViewUser($userID);

	$result = [];
	if (isset($_POST['save'])) {
		$userName = Request::getParam('username');
		$password = Request::getParam('password');
		$result = $editObject->getEditUser($userName, $password, $userID);

	}
	$smarty = new Smarty();
	$smarty->template_dir = '../../templates/admin/';
	$smarty->compile_dir = '../../compile/';

	$smarty->assign('result', $result);
	$smarty->assign('username', $view[0]['username']);
	$smarty->assign('password', $view[0]['password']);
	$smarty->display('adminAdd.tpl');
?>