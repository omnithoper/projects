<?php
	require  'main.php';
	require  '../../classes/setting.php';
	
	$semesterID = Request::getParam('semester_id');
	
	$deleteObject = new Settings();
	$delete = $deleteObject->getDeleteSemester($semesterID);
?>