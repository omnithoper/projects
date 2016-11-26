<?php
	require  'main.php';
	require  '../../classes/student.php';
	require  '../../classes/subject.php';
	require  '../../classes/student subject class.php';
	require  '../../classes/setting.php';
	require '../../lib/smarty/Smarty.class.php'; 

	$studentName = Request::getParam('studentName');
	$studentID = Request::getParam('studentID');
	$getSubjectID = Request::getParam('getSubjectID');
	$subjectID = Request::getParam('subjectID');
	$students = [];
	
	$subjectObject = new subject();
	$studentSubjectObject = new studentSubjectMatch();
	$studentLastNameObject = new student();
	$subject = $subjectObject->getSubjects();

	$students = $studentLastNameObject->getAllStudentInformation($studentName);
	$selectedStudent = $studentLastNameObject->getViewStudent($studentID);
	
	if (count($students) == 1) {
		$selectedStudent = (!empty($students[0]))?$students[0]:NULL;
		$studentID = $students[0]['student_id'];
	}

	$studentSubject  = $studentSubjectObject->getAddStudentSubjectID($studentID, $getSubjectID);
			 
	if (Request::getParam('action') == 'delete') {
		$delete = $studentSubjectObject->getDeleteSubject($studentID, $subjectID);
	}
	$allSubject = $studentSubjectObject->getStudentSubjects($studentID);
	$totalUnit = $subjectObject->getCurrentUnits($studentID);

	$smarty = new Smarty();
	$smarty->template_dir = '../../templates/studentSubject/';
	$smarty->compile_dir = '../../templates/studentSubject/';

	$smarty->assign('students', $students);
	$smarty->assign('selectedStudent', $selectedStudent);
	$smarty->assign('subject', $subject);
	$smarty->assign('allSubject', $allSubject);
	$smarty->assign('studentID', $studentID);
	$smarty->assign('totalUnit', $totalUnit);
	$smarty->assign('error', $studentSubject);
	$smarty->display('student_enroly.tpl');

?>
