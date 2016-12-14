<?php 
	require  'main.php';

	$studentID = Request::getParam('studentID');
	$totalAmount = Request::getParam('totalPrice');
	$change = Request::getParam('change');
	$cash = Request::getParam('cash');

	$paymentObject = new Payment();
	$paymentObject->getAddPayment($studentID, $cash, $change); 
	$payment = $paymentObject->getViewPayment($studentID, $cash, $change);
	
	$studentObject = new Student();
	$studentName = $studentObject->getViewStudent($studentID); 


	$smarty = new Smarty();
	$smarty->template_dir = '../../templates/payment/';
	$smarty->compile_dir = '../../compile/';

	$smarty->assign('payment', $payment);
	$smarty->assign('studentName', $studentName);
	$smarty->assign('studentID', $studentID);
	$smarty->assign('cash', $cash);
	$smarty->display('payment.tpl');

?>