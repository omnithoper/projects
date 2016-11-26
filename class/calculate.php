<?php

class calculator {
	private $_total;
	
	public function add($value) {
		$this->_total += $value ;
	}
	
	public function subtract($value) {
		$this->_total -= $value;
	} 
	
	public function getTotal() {
		return $this->_total;

	}

}
?>

