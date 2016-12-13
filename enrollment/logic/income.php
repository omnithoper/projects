<?php
	require 'main.php';

	$settingObject = new Settings();
	$result = $settingObject->getPaymentDate();
	$income = $settingObject->getSemesterTotalIncome();
	$semesterDate = $settingObject->getConcatSemester();

	$smarty->template_dir = '../../templates/income/';
	$smarty->compile_dir = '../../compile/';

	$smarty->assign('result', $result);
	$smarty->assign('semesterDate', $semesterDate);
	$smarty->assign('totalAmount', $income[0]['total_amount']);
	$smarty->assign('change', $income[0]['change']);
	$smarty->assign('totalPaid', $income[0]['total_paid']);
	$smarty->display('view.tpl');
?>