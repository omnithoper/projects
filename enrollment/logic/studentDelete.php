<?php
	require 'main.php';
	require '../../classes/student.php';
	
	$studentID = Request::getParam('student_id');
	var_dump($studentID);
	$deleteObject = new Student();
	$delete = $deleteObject->getDeleteStudent($studentID);