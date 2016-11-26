<?php
class arithmetic {
	protected $_color = '#000;';

	function operator($mdas, $a, $b) {
		$anumber = $a;
		switch ($mdas) {
			case 'add':
				return $this->add($a, $b);
				break;
			case 'subtract':
				return $this->subtract($a, $b);
				break;
			case 'multiply':
				return $this->multiply($a, $b);
				break;
			case 'divide':
				return $this->divide($a, $b);
				break;
		}
	}

	function add($num1, $num2) {
		$answer = $num1 +  $num2;
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

	function setColor($color) {
		$this->_color = $color;
	}

	function getColor() {
		return $this->_color;
	}
}
?>
