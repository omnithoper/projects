<?php
class Student {
	private $_db = null;
	
	function __construct() {
		$this->_db = new DatabaseConnect();
	}
	function getViewStudents() {
	$payment = $this->getViewStudentPayed();		
		$select = "SELECT * FROM student";
		$student = $this->_db->connection->query($select);
		$student = $student->fetch_all(MYSQLI_ASSOC);
		$result = [];
		$payed = NULL;
		foreach ($student as $students){
			foreach ($payment as $payments) {
				if (($students['student_id'] == $payments['student_id']) &&($payments['payment'] == 1)) {	
					$students['payed'] ='payed';	
					$payed = $students;
					break;
					 $result[] = $payed;
					} else   { 
					$students['payed'] ='not yet payed';	
					 $payed = $students;	
				}	
			} 
			$result[] = $payed;

		}	return $result;
	}	
	function getViewStudentPayed() {

	$select="
			SELECT
			student.student_id,
			payment.payment
			FROM student 
			JOIN payment ON student.student_id = payment.student_id
		";
		$student = $this->_db->connection->query($select);
		$student = $student->fetch_all(MYSQLI_ASSOC);

	
		return $student;

	}

	function getViewStudentsPaginated($per_page) {
		$select ="SELECT * FROM student LIMIT $per_page,5 ";
		$student = $this->_db->connection->query($select);
		return $student;
	}
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
	
	function studentExist($firstName, $lastName) {
		if (empty($firstName)) {
			return false;
		}
		
		if (empty($lastName)) {
			return false;
		}
		
		$prepared = $this->_db->connection->prepare("
			SELECT student_id FROM student WHERE first_name = ? AND last_name = ?
		");	
		
		$prepared->bind_param('ss', $firstName, $lastName);
		$prepared->execute();	
		$prepared->bind_result($studentID);
		$prepared->fetch();
		$this->_db->connection->close();
		return !empty($studentID);

	} 
	
	function getAddStudent($firstName, $lastName) {
		$db = new DatabaseConnect();
		
		if (empty($firstName)) {
			return [
			'error' => 'Please Input Name And Lastname',
			];	
		}

		if (empty($lastName)) {
			return [
			'error' => 'Please Input Name And Lastname',
			];	
		}	

		if ($this->studentExist($firstName, $lastName)) {
			return [
				'error' => 'Student Already Exist',	
			];
		}

		$prepared = $db->connection->prepare("
			INSERT INTO student(first_name, last_name)
			VALUES (?,?)
		");	
		
		$prepared->bind_param('ss', $firstName, $lastName);
		$prepared->execute();	
		$db->connection->close();
		
		header("Location: /enrollment/templates/student/");			
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
	
	function getEditStudent($firstName, $lastName, $studentID) {
		$db = new DatabaseConnect();
		
		if (empty($firstName)) {
			return [
			'error' => 'Please Input Name And Lastname',
			];	
		}

		if (empty($lastName)) {
			return [
			'error' => 'Please Input Name And Lastname',
			];	
		}	

		if ($this->studentExist($firstName, $lastName)) {
			return [
				'error' => 'Student Already Exist',	
			];
		}
	
		if ($prepared = $db->connection->prepare("UPDATE student SET first_name = ?, last_name = ? WHERE student_id=?;"))
		{
			$prepared->bind_param("sss", $firstName, $lastName,$studentID);
			$prepared->execute();
			$prepared->close();
		} else {
			var_dump($firstname);
			var_dump($lastname);
			var_dump($student_id);
			die();
		}	

			header("Location: /enrollment/templates/student/");
		
		$db->connection->close();
	}

	function getDeleteStudent($studentID) {
		$db = new DatabaseConnect();

		if (empty($studentID)) {
			return true;
		}
			$query = "DELETE FROM student WHERE student_id = ".$studentID;

			if ($db->connection->query($query) === true)
			{
			}

			$db->connection->close();
			header("Location: /enrollment/templates/student/");
	}
}
?>
