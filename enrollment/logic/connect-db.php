<?php
mysqli_report(MYSQLI_REPORT_ERROR);
class DatabaseConnect {
	public $connection = null;
	
	public function __construct()
	{
		$config = parse_ini_file(APPLICATION_PATH.'/configuration/application.ini');
		$config = !empty($config)?$config:parse_ini_file('../configuration/application.ini');

		$config_extended = parse_ini_file('../../configuration/local.ini');
		$config_extended = !empty($config_extended)?$config_extended:parse_ini_file('../configuration/local.ini');

		$config = array_merge($config, $config_extended);

		$this->connection = new mysqli($config['host'], $config['username'], $config['password'], $config['database']);
	}
	
	public function addStudentPlusDefaultSubject()
	{
		$this->connection->query('INSERT INTO student SET first_name = '.$first_name.', last_name = '.$last_name.' default_subject_id = 9999');
	}
}

$isPost = !empty($_POST);
?>