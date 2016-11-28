<?php
	require  'main.php';
	require  '../../classes/payment.php';
	require  '../../classes/student.php';
	require(APPLICATION_PATH.'/lib/fpdf.php');
	
	$studentID = Request::getParam('student_id');
	$paymentObject = new Payment();
	$studentObject = new Student();
	$name = $studentObject->getViewStudent($studentID);
	$view = $paymentObject->getViewStudentPayment($studentID);


	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(110,10);
	$pdf->Cell(20,10, 'date:');
	$pdf->Cell(20,10, $view[0]['transaction_date'],0,1);
	$pdf->Cell(20,10, 'Name:');
	$pdf->Cell(20,10, $name['full_name'],0,1);
	$pdf->Cell(50,10, 'Invoice Number:');
	$pdf->Cell(20,10, $view[0]['payment_id'] ,0,1);
	$pdf->Cell(38,10, 'Amount Paid:');
	$pdf->Cell(20,10, $view[0]['total_amount'],0,1);
	$pdf->Cell(25,10, 'Change:');
	$pdf->Cell(20,10, $view[0]['change']);
	$pdf->Output();

?>