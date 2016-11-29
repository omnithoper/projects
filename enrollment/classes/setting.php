<?php
class Settings {
	private $_db = null;
	
	function __construct() {
		$this->_db = new DatabaseConnect();
	}
	
	function getViewTotalPayment() {
		$select = "SELECT * FROM settings ";
		$tp = $this->_db->connection->query($select);
		$result = $tp->fetch_all(MYSQLI_ASSOC);
		return $tp;
	}

	function getViewAllSemester($semesterID = NULL) {
		$select = "SELECT * FROM semester ";
		$result = $this->_db->connection->query($select);
		$result = $result->fetch_all(MYSQLI_ASSOC);
		return $result;
	}
	function getViewSemester($semesterID = null){
		if (empty($semesterID)) {
			return false;
		}
		var_dump($semesterID);
		$select = "SELECT * FROM semester WHERE semester_id = $semesterID" ;
		$result = $this->_db->connection->query($select);
		$result = $result->fetch_all(MYSQLI_ASSOC);
		return $result;
	}	

function getAddSemester($dateStart, $dateEnd) {
	
		if (empty($dateStart)) {
			return [
			'error' => 'Please Date Start And Date End',
			];	
		}

		if (empty($dateEnd)) {
			return [
			'error' => 'Please Date Start And Date End',
			];	
		}	
		
		$prepared = $this->_db->connection->prepare("
			INSERT INTO semester(date_start, date_end)
			VALUES (?,?)
		");	

		$prepared->bind_param('ss', $dateStart, $dateEnd);
		$prepared->execute();	

		print $prepared->error;
	
		
		header("Location: /templates/setting/");			
	}
	function getEditSemester($dateStart, $dateEnd, $semesterID) {
				
		
		if (empty($dateStart)) {
			return [
			'error' => 'please input subject and unit'
			];
		}
		if (empty($dateEnd)) {
			return [
			'error' => 'please input subject and unit'
			];
		}
	
		$prepared = $this->_db->connection->prepare("UPDATE semester SET date_start = ?, date_end = ? WHERE semester_id = ? ");
		$prepared->bind_param("ssi", $dateStart, $dateEnd, $semesterID);
		$prepared->execute();
		$prepared->close();


	
			header("Location: /templates/setting/");
	}
	
	function getDeleteSemester($semesterID) {
		
		if (empty($semesterID)){
			return true;
		}
	
		$query = "DELETE FROM semester WHERE semester_id = ".$semesterID;

		if ($this->_db->connection->query($query) === true)
		{
		}

		header("Location: /templates/setting/");
	}

	function isEcceededUnits($studentID = null, $subjectID = null) {
		$subjectObject = new Subject();
		$currentUnits = $subjectObject->getCurrentUnits($studentID);
		$subjectUnits = $subjectObject->getSubjectUnits($subjectID);
		$allowedUnits = $this->getAllowedUnits();

		return ($allowedUnits < ($currentUnits + $subjectUnits));
	}
	
	public function getSubjectUnits($subjectID = null)
	{
		$query = "
			SELECT
				subject_unit
			FROM subjects
			WHERE subject_id = ".$subjectID."
		";

		$results = $this->_db->connection->query($query);
		$results = $results->fetch_all(MYSQLI_ASSOC);
		return (empty($results))?0:$results[0]['subject_unit'];
	}

	public function getAllowedUnits()
	{
		$query = "
			SELECT
				number_of_allowed_units
			FROM settings
		";

		$results = $this->_db->connection->query($query);
		$results = $results->fetch_all(MYSQLI_ASSOC);
		return (empty($results))?0:$results[0]['number_of_allowed_units'];
	}


	public function getPriceMisc()
	{
		$query = "
			SELECT
				price_of_misc
			FROM settings
		";

		$results = $this->_db->connection->query($query);
		$results = $results->fetch_all(MYSQLI_ASSOC);
		return (empty($results))?0:$results[0]['price_of_misc'];
	}
	public function getPricePerUnit()
	{
		$query = "
			SELECT
				price_per_unit
			FROM settings
		";

		$results = $this->_db->connection->query($query);
		$results = $results->fetch_all(MYSQLI_ASSOC);
		return (empty($results))?0:$results[0]['price_per_unit'];
	}
}
?>