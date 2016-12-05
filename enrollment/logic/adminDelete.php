<?php
	require  'main.php';
	require  '..\..\classes\admin.php';
	
	$userID = Request::getParam('user_id');


	$deleteObject = new Admin();
	$delete = $deleteObject->getDeleteUser($userID);
?>