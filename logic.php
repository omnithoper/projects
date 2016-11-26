<html>
<body>
<?php
include 'operator.php';
include 'classbutton.php';

$answer = 0;
$number_one = isset($_GET['var1'])?$_GET['var1']:"";
$number_two = isset($_GET['var2'])?$_GET['var2']:"";
$operation = isset($_GET['MDAS'])?$_GET['MDAS']:0;
	
if (!empty($operation))
{
$calculator = new arithmetic();
$answer = $calculator->operator($operation,$number_one,$number_two);
}


$button = new forbutton();
$buttonDisplay = $button->button();



?>



