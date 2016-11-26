<?php
class Cashier {
	private $_db = null;
	
	function __construct() {
		$this->_db = new DatabaseConnect();
	}
	
	public function getTotalPrice($studentID) {
		$settingObject = new Settings();
		$subjectObject = new Subject();
		$totalUnits = $subjectObject->getCurrentUnits($studentID);
		$perUnit = $settingObject->getPricePerUnit();
		$misc = $settingObject->getPriceMisc();
		$result = $totalUnits * $perUnit + $misc;

		return $result;
	}
	public function getTotalUnitPrice($studentID) {
		$settingObject = new Settings();
		$subjectObject = new Subject();
		$totalUnits = $subjectObject->getCurrentUnits($studentID);
		$perUnit = $settingObject->getPricePerUnit();
		$result = $totalUnits * $perUnit;

		return $result;
	}

}	
?>	