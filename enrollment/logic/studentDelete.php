<?php
	require 'main.php';
	
	$studentID = Request::getParam('student_id');
	var_dump($studentID);
	$deleteObject = new Student();
	$delete = $deleteObject->getDeleteStudent($studentID);