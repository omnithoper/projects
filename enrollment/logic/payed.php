<?php
	require  'main.php';
	require  '../classes/payment.php';

	$paymentID = Request::getParam('paymentID');
	var_dump($paymentID);

	$paymentObject = new Payment(); 
	$paymentObject->ifPayed($paymentID);
?>