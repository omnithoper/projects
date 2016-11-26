<?php
	class Book extends Item {
		public function  __construct($price) {
			$this->_price = $price; 
			var_dump($this->_price);
	    }	
	}
?>