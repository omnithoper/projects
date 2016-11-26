<?php
	require  'main.php';
	require  '..\..\classes\subject.php';
	
	$subjectID = Request::getParam('subject_id');
	
	$deleteObject = new Subject();
	$delete = $deleteObject->getDeleteSubject($subjectID);
?>