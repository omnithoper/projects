<?php
	require  'main.php';
	
	$userID = Request::getParam('user_id');


	$deleteObject = new Admin();
	$delete = $deleteObject->getDeleteUser($userID);
?>