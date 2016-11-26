<?php
class arithmetic {
		function operator($mdas,$num1,$num2) {
		   
		   return $this->$mdas($num1, $num2);
           return $answer;

		}	
		function add($num1, $num2) {
			$answer = $num1 + $num2;	
			return $answer;
		}


		function subtract($num1, $num2) {
			$answer = $num1 -  $num2;	
			return $answer;
		}

		function multiply($num1, $num2) {
			$answer = $num1 *  $num2;	
			return $answer;
		}

		function divide($num1, $num2) {
			$answer = $num1 /  $num2;	
			return $answer;
		}

		function clear($num1,$num2) {
			$num1 = "";
			$num2 = "";
		}
	
}		

?>
