<?php
mysqli_report(MYSQLI_REPORT_ERROR);
class DatabaseConnect {
	private $_server = 'localhost';
	private $_user = 'anthony';
	private $_pass = 'password';
	private $_database = 'student_subjects';
	public $connection = null;
	
	public function __construct()
	{
		$this->connection = new mysqli($this->_server, $this->_user, $this->_pass, $this->_database);
	}
	
	public function addStudentPlusDefaultSubject()
	{
		$this->connection->query('INSERT INTO student SET first_name = '.$first_name.', last_name = '.$last_name.' default_subject_id = 9999');
	}
}

$isPost = !empty($_POST);
?>