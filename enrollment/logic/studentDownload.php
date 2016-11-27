<?php
	require  'main.php';
	require  '../../classes/payment.php';
	
	$studentID = Request::getParam('student_id');
	#var_dump($studentID);
	$payementObject = new Payment();
	$view = $payementObject->getViewStudentPayment($studentID);
	#var_dump($view);

$name = "sample.pdf";



require(APPLICATION_PATH.'/lib/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Output();

?>