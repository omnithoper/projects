<?php 
	require 'main.php';
	require '../../classes/student.php';
	require '../../classes/payment.php';
	require '../../classes/setting.php';

    $adminObject = new Admin();
    $adminObject->userSession(); 

	$studentObject = new Student();
	$paymentObject = new payment();
	$students = $studentObject->getViewStudentPayed(); 

	$smarty->template_dir = '../../templates/student/';
	$smarty->compile_dir = '../../compile/';

	$smarty->assign('student', $students);
	$smarty->display('view.tpl');
?>