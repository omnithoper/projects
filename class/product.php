<?php

$banana = 'banana split';

class Product {
	private $_type;
	private $_price;
	
	public function __construct($type, $price) {
		$this->_type = $type;
		$this->_price = $price;
	}
	
	public function setProductValue($value) {
		$this->_type = $value;
	}	
	
	public function getProductBanana($banana) {
		return $banana;
	}
	
	public function getProductValue() {
		return $this->_type;
	}
	
	public function getProductPrice() {
		return $this->_price;
	}
}


function getCityName($arg1) {
	
}

function getContactName($arg1) {
	
}

Class City {
	function getName() {
		
	}
}

Class Contact {
	function getName() {
		
	}
}

$city = new City();
$contact = new Contact();


$city->getName($arg1);
$contact->getName($arg1);



?>