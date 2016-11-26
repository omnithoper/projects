<?php
	require  'main.php';
	require  '../classes/payment.php';

	$paymentID = Request::getParam('paymentID');

	$paymentObject = new Payment(); 
	$paymentObject->ifPayed($paymentID);
?>