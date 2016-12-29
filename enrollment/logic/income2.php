<?php
	require 'main.php';

	$semDate = Request::getParam('semDate');
	$singleSemDate = Request::getParam('singleSemDate');
	$studentID = Request::getParam('studentID');
	var_dump($studentID);
	$singleDate = explode(',' , $singleSemDate);
	var_dump($singleSemDate);
	$singleDateStart = empty($singleDate[0])?NULL:$singleDate[0];
	$singleDateEnd = empty($singleDate[1])?NULL:$singleDate[1];
	$date = explode(',' , $semDate);
	$dateStart = empty($date[0])?NULL:$date[0];
	$dateEnd = empty($date[1])?NULL:$date[1];
	

	$settingObject = new Settings();
	$result = $settingObject->getPaymentDate($dateStart, $dateEnd);
	$semesterDate = $settingObject->getViewAllSemester();
	$income = $settingObject->getSemesterTotalIncome($dateStart, $dateEnd);
	$totalAmount = empty($income[0]['total_amount'])?NULL:$income[0]['total_amount'];
	$change = empty($income[0]['change'])?NULL:$income[0]['change'];
	$totalPaid = empty($income[0]['total_paid'])?NULL:$income[0]['total_paid'];

	$singleResult = $settingObject->getSinglePaymentDate($studentID, $singleDateStart, $singleDateEnd);
	$singleIncome = $settingObject->getSemesterSingleIncome($singleDateStart, $singleDateEnd);
	$singleAmount = empty($singleIncome[0]['total_amount'])?NULL:$singleIncome[0]['total_amount'];
	$singleChange = empty($singleIncome[0]['change'])?NULL:$singleIncome[0]['change'];
	$singlePaid = empty($singleIncome[0]['total_paid'])?NULL:$singleIncome[0]['total_paid'];

	$smarty->template_dir = '../../templates/income/';
	$smarty->compile_dir = '../../compile/';

	$smarty->assign('result', $result);
	$smarty->assign('semesterDate', $semesterDate);
	$smarty->assign('singleResult', $singleResult);
	$smarty->assign('singleAmount', $singleAmount);
	$smarty->assign('singleChange', $singleChange);
	$smarty->assign('singlePaid', $singlePaid);
	$smarty->assign('totalAmount', $totalAmount);
	$smarty->assign('change', $change);
	$smarty->assign('totalPaid', $totalPaid);
	$smarty->display('view.tpl');
?>