<?php
	require  'main.php';

	$studentID = Request::getParam('studentID');
	$studentName = Request::getParam('studentName');

	$settingObject = new Settings();
	$cashierObject =  new Cashier();
	$priceMisc = $settingObject->getPriceMisc();
	$totalPrice = $cashierObject->getTotalPrice($studentID);
	$totalUnitPrice = $cashierObject->getTotalUnitPrice($studentID);
	$totalLecUnitPrice = $cashierObject->getTotalLecturePrice($studentID);
	$totalLabUnitPrice = $cashierObject->getTotalLaboratoryPrice($studentID);

	$studentSubjectObject = new studentSubjectMatch();
	$allSubject = $studentSubjectObject->getStudentSubjects($studentID);
	$paymentObject = new Payment();

	$subjectObject = new  Subject();
	$totalUnit = $subjectObject->getCurrentUnits($studentID);
	$totalLecUnit = $subjectObject->getLectureUnits($studentID);
	$totalLabUnit = $subjectObject->getLaboratoryUnits($studentID);

	$smarty = new Smarty();
	$smarty->template_dir = '../../templates/cashier/';
	$smarty->compile_dir = '../../compile/';

	$smarty->assign('allSubject', $allSubject);
	$smarty->assign('totalLecUnit', $totalLecUnit);
	$smarty->assign('totalLabUnit', $totalLabUnit);
	$smarty->assign('totalLecUnitPrice', $totalLecUnitPrice);
	$smarty->assign('totalLabUnitPrice', $totalLabUnitPrice);	
	$smarty->assign('studentID', $studentID);
	$smarty->assign('totalUnit', $totalUnit);
	$smarty->assign('totalUnitPrice', $totalUnitPrice);
	$smarty->assign('studentName', $studentName);
	$smarty->assign('priceMisc', $priceMisc);
	$smarty->assign('totalPrice', $totalPrice);
	$smarty->display('cashier.tpl');
?>
