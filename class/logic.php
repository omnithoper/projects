<?php
include 'operator.php';
$answer = 0;
$number_one = isset($_GET['var1'])?$_GET['var1']:0;
$number_two = isset($_GET['var2'])?$_GET['var2']:0;
$operation = isset($_GET['MDAS'])?$_GET['MDAS']:null;
var_dump($operation);
var_dump($number_two);

$cesar = new arithmetic();
$answer = $cesar->operator($operation, $number_one, $number_two);
$cesar->setColor('red;');
$color1 = $cesar->getColor();

$cab = new arithmetic();
$answer2 = $cab->multiply(($number_one + 5), $number_two);
$color2 = $cab->getColor();


?>
