<?php
	require 'main.php';

	$semDate = Request::getParam('semDate');
	$date = explode(',' , $semDate);
	$dateStart = empty($date[0])?NULL:$date[0];
	$dateEnd = empty($date[1])?NULL:$date[1];
	

	$settingObject = new Settings();
	$result = $settingObject->getPaymentDate($dateStart, $dateEnd);
	$income = $settingObject->getSemesterTotalIncome($dateStart, $dateEnd);
	$totalAmount = empty($income[0]['total_amount'])?NULL:$income[0]['total_amount'];
	$change = empty($income[0]['change'])?NULL:$income[0]['change'];
	$totalPaid = empty($income[0]['total_paid'])?NULL:$income[0]['total_paid'];
	$semesterDate = $settingObject->getViewAllSemester();

	$smarty->template_dir = '../../templates/income/';
	$smarty->compile_dir = '../../compile/';

	$smarty->assign('result', $result);
	$smarty->assign('semesterDate', $semesterDate);
	$smarty->assign('totalAmount', $totalAmount);
	$smarty->assign('change', $change);
	$smarty->assign('totalPaid', $totalPaid);
	$smarty->display('view.tpl');
?>