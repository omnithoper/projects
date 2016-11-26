<?php
class Student {
	function getStudentInformation($studentName) {
		$db = new DatabaseConnect();
		
		$select = "
			SELECT 
				first_name, 
				last_name 
			FROM student 
		";
		
		$students = $db->connection->query($select);
		
		$studentLastName = NULL;	
		
		foreach ($students as $student){
			
			if ($student['first_name'] == $studentName) {
				$studentLastName = $student['last_name'];
			}

		}
		
		return $studentLastName;
	}
	
	function getAllStudentInformation($studentName) {
		if (empty($studentName)) {
			return [];
		}
		
		$db = new DatabaseConnect();
		
		$select = "
			SELECT 
				student_id,
				first_name, 
				last_name,
				CONCAT(last_name, ', ', first_name) AS full_name
			FROM student 
			WHERE 
				first_name LIKE '$studentName%' OR
				last_name LIKE '$studentName%'
		";
		
		$students = $db->connection->query($select);
		$students = $students->fetch_all(MYSQLI_ASSOC);
		
		$db->connection->close();	
		return $students;
	}
	
	function getAddStudent() {
		$db = new DatabaseConnect();
		if ((!empty($_POST)) && (!empty($_POST['first_name'])) && (!empty($_POST['last_name']))) {  

			$firstName = !empty($_POST['first_name'])?$_POST['first_name']:null;
			$lastName = !empty($_POST['last_name'])?$_POST['last_name']:null;

			$prepared = $db->connection->prepare("
				INSERT INTO student(first_name, last_name)
				VALUES (?,?)
			");	
			
			$prepared->bind_param('ss', $firstName, $lastName);

			$prepared->execute();	
			header("Location: /mysql/student/view.php");
		
		$db->connection->close();
		}	
	}

	function getViewStudent($studentID = null){
		if (empty($studentID)) {
			return false;
		}
		
		$db = new DatabaseConnect();
		$result = [];
		if (!empty($studentID)) {
			$select = '
				SELECT 
					student_id,
					first_name,
					last_name,
					CONCAT(last_name, ", ", first_name) AS full_name
				FROM student
				WHERE student_id = ?
			';
			$prepared = $db->connection->prepare($select);
			$prepared->bind_param('i', $studentID);
			$prepared->execute();
			$prepared->bind_result($studentID, $firstName, $lastName, $fullName);
			$prepared->fetch();
			$result['student_id'] = $studentID;
			$result['first_name'] = $firstName;
			$result['last_name'] = $lastName;
			$result['full_name'] = $fullName;
			
		} 
		$db->connection->close();

		return $result;
	}
	
	function getEditStudent($studentID) {
		$db = new DatabaseConnect();

		$firstname = htmlentities($_POST['first_name'], ENT_QUOTES);
		$lastname = htmlentities($_POST['last_name'], ENT_QUOTES);

		if ($firstname != '' && $lastname != '')
		{
			if ($prepared = $db->connection->prepare("UPDATE student SET first_name = ?, last_name = ? WHERE student_id=?;"))
			{
				$prepared->bind_param("sss", $firstname, $lastname,$studentID);
				$prepared->execute();
				$prepared->close();
			}
			else {
			var_dump($firstname);
			var_dump($lastname);
			var_dump($student_id);
			die();

			}	
	
			header("Location: view.php");
		}
		$db->connection->close();
	}

	function getDeleteStudent() {
		$db = new DatabaseConnect();

		if (isset($_GET['student_id']) && is_numeric($_GET['student_id']))
		{
			$id = $_GET['student_id'];
			$query = "DELETE FROM student WHERE student_id = ".$id;

			if ($db->connection->query($query) === true)
			{
			}

			$db->connection->close();
			header("Location: view.php");
		}
	}
}
?>