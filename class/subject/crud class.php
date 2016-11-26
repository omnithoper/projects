<?php


class Subject {
	
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
	
	function getAddSubject($subject, $subjectUnit) {
		$db = new DatabaseConnect();
		
		if (empty($subject)) {
			return true;
		}
		if (empty($subjectUnit)) {
			return true;
		}
		$prepared = $db->connection->prepare("
			INSERT INTO subjects(subject, subject_unit)
			VALUES (?,?)
		");	
		$prepared->bind_param('si', $subject, $subjectUnit);

		$prepared->execute();	
		header("Location: /mysql/subject/view.php");
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
		
	function getEditSubject($subjectID) {
		$db = new DatabaseConnect();
	

		$subject = htmlentities($_POST['subject'], ENT_QUOTES);
		$subjectUnit = htmlentities($_POST['subject_unit'], ENT_QUOTES);
		if ($subject != '' && $subjectUnit != '')
		{
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
	
			header("Location: view.php");
		
		}
		$db->connection->close();
	}
	
	function getDeleteSubject() {
	
		$db = new DatabaseConnect();

		if (isset($_GET['subject_id']) && is_numeric($_GET['subject_id']))
		{
			$id = $_GET['subject_id'];
			$query = "DELETE FROM subjects WHERE subject_id = ".$id;

		if ($db->connection->query($query) === true)
		{
		}

		$db->connection->close();
		header("Location: view.php");
		}
	}
}
?>