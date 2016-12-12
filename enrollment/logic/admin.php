<?php
<<<<<<< HEAD
	require 'main.php';

=======
>>>>>>> fb416a655db864e2086edc385d474f3c803a11fa
	$adminObject = new Admin();
	$result = $adminObject->getViewadmin();
	
	$smarty->template_dir = '../../templates/admin/';
	$smarty->compile_dir = '../../compile/';

	$smarty->assign('result', $result);
	$smarty->display('view.tpl');
?>
