<?php
	require  'main.php';

	
	$subjectID = Request::getParam('subject_id');
	
	$deleteObject = new Subject();
	$delete = $deleteObject->getDeleteSubject($subjectID);
?>