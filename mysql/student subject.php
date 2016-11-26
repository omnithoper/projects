<?php

/*
class Student {
	
	function getStudentName($name) {
		$db = new mysqli('127.0.0.1', 'root', '', 'student subjects');
		$students = $db->query("SELECT * FROM student");
		$lastName = NULL;
		
		foreach( $students as $student) {
			if ($student['first_name'] == $name) {
				$lastName = $student['last_name'];
			}
		} return $lastName;
		$db->close();
	}
	
	function getStudentMathID($name){
		$db = new mysqli('127.0.0.1', 'root', '', 'student subjects');
		$students = $db->query("SELECT * FROM student");
		$studentMathID = 0;
		
		foreach ($students as $student) {
			if ($student['first_name'] == $name) {
				$studentMathID = $student['math_id'];
			}
		} return $studentMathID;
		$db->close();
	}	
	
		function getStudentScienceID($name){
		$db = new mysqli('127.0.0.1', 'root', '', 'student subjects');
		$students = $db->query("SELECT * FROM student");
		$studentScienceID = 0;
		
		foreach ($students as $student) {
			if ($student['first_name'] == $name) {
				$studentScienceID = $student['science_id'];
			}
		} return $studentScienceID;
		$db->close();
	}	
	
		function getStudentHistoryID($name){
		$db = new mysqli('127.0.0.1', 'root', '', 'student subjects');
		$students = $db->query("SELECT * FROM student");
		$studentHistoryID = 0;
		
		foreach ($students as $student) {
			if ($student['first_name'] == $name) {
				$studentHistoryID = $student['math_id'];
			}
		} return $studentHistoryID;
		$db->close();
	}
}
class Math {
	
	function getMathBranch($mathID){
		$db = new mysqli('127.0.0.1', 'root', '', 'student subjects');
		$maths = $db->query("SELECT * FROM math");
		$mathName = NULL;
		
		foreach($maths as $math) {
			if ($math['math_id'] == $mathID) {
				$mathName = $math['math_branches'];
			}
		} return $mathName;
		$db->close();
	} 
}

class Science{
		
	function getScienceBranch($scienceID){
		$db = new mysqli('127.0.0.1', 'root', '', 'student subjects');
		$sciences = $db->query("SELECT * FROM science");
		$scienceName = NULL;
		
		foreach($sciences as $science) {
			if ($science['science_id'] == $scienceID) {
				$scienceName = $science['science_branches'];
			}
		} return $scienceName;
		$db->close();
	} 
}
class History{
		
	function getHistoryBranch($historyID){
		$db = new mysqli('127.0.0.1', 'root', '', 'student subjects');
		$historys = $db->query("SELECT * FROM history");
		$historyName = NULL;
		foreach($historys as $history) {
			if ($history['history_id'] == $historyID) {
				$historyName = $history['history_branches'];
			}
		} return $historyName;
		$db->close();
	}
}

*/

class Math { 

	function getMathID($mathBranch){
		$db = new mysqli('127.0.0.1', 'root', '', 'student subjects');
		$maths = $db->query("SELECT * FROM math");
		$mathID = 0;
		
		foreach($maths as $math) {
			if ($math['math_branches'] ==  $mathBranch) {
				$mathID = $math['math_id'];
			}
		} return $mathID;
	}
}

class Student {
	
	function getStudentsName($mathID) {
		$db = new mysqli('127.0.0.1', 'root', '', 'student subjects');
		$students = $db->query("SELECT math_id, science_id, history_id, CONCAT(first_name, ' ', last_name) as name FROM student ");
		$scienceObject = new Science();
		$historyObject = new History();
		$studentName = [];
		
		foreach ($students as $student){
			if ($student['math_id'] == $mathID){
				$student['science'] = $scienceObject->getScienceBranch($student['science_id']);
				$student['history'] = $historyObject->getHistoryBranch($student['history_id']);
				$studentName []= $student;
			}
		} return $studentName ;
	}
	
	function addStudent($addCrud) {
		if (empty($_POST['CRUD'])) {
			return false;
		}
		
		if ($_POST['CRUD'] != 'Add') {
			return false;
		}
		
		if (empty($_POST['first_name'])) {
			return false;
		}
		
		if (empty($_POST['last_name'])) {
			return false;
		}
		
			$db = new mysqli('127.0.0.1', 'root', '' ,'student subjects');
			if ($db->connect_error) {
				die("Connection failed: " . $db->connect_error);
			}

			$science = !empty($_POST['science'])?$_POST['science']:null;
			$history = !empty($_POST['history'])?$_POST['history']:null;
			$math = !empty($_POST['math'])?$_POST['math']:null;
			$firstName = !empty($_POST['first_name'])?$_POST['first_name']:null;
			$lastName = !empty($_POST['last_name'])?$_POST['last_name']:null;

			
			$prepared = $db->prepare("
				INSERT INTO student (science_id, history_id, math_id, first_name, last_name)
				VALUES (?, ?, ?, ?, ?)
			");	 
			$prepared->bind_param('sssss', $science, $history, $math ,$firstName, $lastName);
				$result = $prepared->execute();
				$db->close();
				return $result;
			
		
	}	
}
class Science{
	function getScienceBranch($scienceID){
		$db = new mysqli('127.0.0.1', 'root', '', 'student subjects');
		$sciences = $db->query("SELECT * FROM science");
		$scienceName = NULL;
		foreach ($sciences as $science){
			if ($science['science_id'] == $scienceID){
				$scienceName = $science['science_branches'];
			}
		} return $scienceName;
	}
}
class History {
	function getHistoryBranch($historyID){
		$db = new mysqli('127.0.0.1', 'root', '', 'student subjects');
		$historys = $db->query("SELECT * FROM history");
		$historyName = NULL;
		foreach ($historys as $history){
			if ($history['history_id'] ==  $historyID){
			$historyName = $history['history_branches'];
			}
		} return $historyName;
	}
}
?>
