<?php

class Item {
	protected $_price;
	
	public function calculateItemVat() {
		return $this->_price * 0.20;
	}
}
?>