<?php
	require '../../logic/main.php';
	require '../../classes/setting.php';
	require '../../lib/smarty/Smarty.class.php'; 
	
	$tpObject = new Settings();
	$result = $tpObject->getViewTotalPayment();
	$result = $result->fetch_all(MYSQLI_ASSOC); 
	
	$smarty = new Smarty();
	$smarty->template_dir = '../../templates/setting/';
	$smarty->compile_dir = '../../templates/setting/';

	$smarty->assign('result', $result);
	$smarty->display('view.tpl');
?>