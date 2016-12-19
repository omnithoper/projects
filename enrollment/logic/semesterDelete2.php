<?php
	require  'main.php';
	
	$semesterID = Request::getParam('semester_id');
	
	$deleteObject = new Settings();
	$delete = $deleteObject->getDeleteSemester($semesterID);
?>