<?php
	require  'main.php';

	$paymentID = Request::getParam('paymentID');

	$paymentObject = new Payment(); 
	$paymentObject->ifPayed($paymentID);
?>