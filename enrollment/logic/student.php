<?php 
	require 'main.php';
	require '../../lib/smarty/Smarty.class.php'; 
	require '../../classes/student.php';
	require '../../classes/payment.php';
	
	$studentObject = new Student();
	$paymentObject = new payment();
	$students = $studentObject->getViewStudents(); 

	$smarty = new Smarty();
	$smarty->template_dir = '../../templates/student/';
	$smarty->compile_dir = '../../templates/student/';

	$smarty->assign('student', $students);
	$smarty->display('view.tpl');
?>