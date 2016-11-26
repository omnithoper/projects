<?php
class studentSubjectMatch {
		
	function getAddStudentSubjectID($studentID, $subjectID) {
		$db = new DatabaseConnect();
	
		if (empty($studentID)) {
			return true;
		}
		if (empty($subjectID)) {
			return true;
		}
		
		$prepared = $db->connection->prepare("
			INSERT INTO student_subject_match(student_id, subject_id)
			VALUES (?,?)
		");	
		$prepared->bind_param('ii', $studentID, $subjectID);

		$prepared->execute();	
		$db->connection->close();
	}
	
	function getStudentSubjects($studentID){
		if (empty($studentID)) {
			return true;
		}
		$db = new DatabaseConnect();
		$select="
			SELECT
			*
			FROM student_subject_match 
			JOIN subjects ON student_subject_match.subject_id = subjects.subject_id
			WHERE student_id =" .$studentID." 
		";
		
		$subjects = $db->connection->query($select);
		$result = [];
		
		foreach ($subjects as $subject){
			$result[] = $subject;
		}
		
		return $result;
					
	}
		function getDeleteSubject($studentID, $subjectID) {
		
		if (empty($studentID)) {
			return true;
		}
		
		if (empty($subjectID)) {
			return true;
		}
		
		$db = new DatabaseConnect();
	
		$query = "DELETE FROM student_subject_match WHERE subject_id = ".$subjectID . " AND student_id = ".$studentID;

		if ($db->connection->query($query) === true)
		{
		}

		$db->connection->close();
	}
	

}	
	
?>
