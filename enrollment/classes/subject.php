<?php
class Subject {
	private $_db = null;
	
	function __construct() {
		$this->_db = new DatabaseConnect();
	}
	function getViewSubjects() {

	$select ="SELECT * FROM subjects ";

	$subjects = $this->_db->connection->query($select);

	return $subjects;
	}
	function getSubjects(){
		$db = new DatabaseConnect();
		$subjects = $db->connection->query("SELECT * FROM subjects");
		$subjectss = [];
		foreach($subjects as $subject){
			$subjectss[] = $subject;
		}
		
		return $subjectss;
		$db->connection->close();
	}   
	function subjectExist($subject) {
		if (empty($subject)) {
			return false;
		}
		
		
		$prepared = $this->_db->connection->prepare("
			SELECT subject_id FROM subjects WHERE subject = ?
		");	
		
		$prepared->bind_param('s', $subject);
		$prepared->execute();	
		$prepared->bind_result($subjectID);
		$prepared->fetch();
		$this->_db->connection->close();
		
		return !empty($subjectID);
	} 
	
	function getAddSubject($subject, $subjectUnit) {
		$db = new DatabaseConnect();
		
		if (empty($subject)) {
			return [
			'error' => 'please input subject and unit'
			];
		}
		if (empty($subjectUnit)) {
			return [
			'error' => 'please input subject and unit'
			];
		}
		if ($this->subjectExist($subject)) {
		return [
			'error' => 'subject Already Exist',	
			];
		}

		$prepared = $db->connection->prepare("
			INSERT INTO subjects(subject, subject_unit)
			VALUES (?,?)
		");	
		$prepared->bind_param('si', $subject, $subjectUnit);

		$prepared->execute();	
		header("Location: /enrollment/templates/subject/");
		$db->connection->close();
	}
		
	function getViewSubject($subjectID){

		$db = new DatabaseConnect();
		$result = [];
		if (!empty($subjectID)) {
			$select = '
				SELECT 
					subject_id,
					subject,
					subject_unit
				FROM subjects
				WHERE subject_id = ?
			';
			$prepared = $db->connection->prepare($select);
			$prepared->bind_param('i', $subjectID);
			$prepared->execute();
			$prepared->bind_result($subjectID, $subject, $subjectUnit);
			$prepared->fetch();
			$result['subject_id'] = $subjectID;
			$result['subject'] = $subject;
			$result['subject_unit'] = $subjectUnit;
		} 
			return $result;
		$db->connection->close();	
	}
		
	function getEditSubject($subject, $subjectUnit, $subjectID) {
				
		
		if (empty($subject)) {
			return [
			'error' => 'please input subject and unit'
			];
		}
		if (empty($subjectUnit)) {
			return [
			'error' => 'please input subject and unit'
			];
		}
	
		$db = new DatabaseConnect();
		if ($prepared = $db->connection->prepare("UPDATE subjects SET subject = ?, subject_unit = ? WHERE subject_id=?;"))
			{
				$prepared->bind_param("sii", $subject, $subjectUnit, $subjectID);
				$prepared->execute();
				$prepared->close();
			}
			else {
			var_dump($subject);
			var_dump($subjectUnit);
			var_dump($subjectID);
			die();

		}	
	
			header("Location: /enrollment/templates/subject/");
		
		
		$db->connection->close();
	}
	
	function getDeleteSubject($subjectID) {
		
		if (empty($subjectID)){
			return true;
		}
		
		$db = new DatabaseConnect();
		$query = "DELETE FROM subjects WHERE subject_id = ".$subjectID;

		if ($db->connection->query($query) === true)
		{
		}

		$db->connection->close();
		header("Location: /enrollment/templates/subject/");
	}
	public function getCurrentUnits($studentID = null)
	{	
		$query = "
			SELECT
				SUM(subjects.subject_unit) AS total_units
			FROM student_subject_match
			JOIN subjects ON student_subject_match.subject_id = subjects.subject_id
			WHERE student_subject_match.student_id = '".$studentID."'
		";

		$results = $this->_db->connection->query($query);
		$results = $results->fetch_all(MYSQLI_ASSOC);
		return (empty($results))?0:$results[0]['total_units'];		
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

	
}
?>