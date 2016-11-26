<?php
// collect and process data
$name  = 'Anthony';
$email = 'omnithopter@yahoo.com';
$message = 'Really great mail site';

$data = array(
	'name' => $name,
	'email'=> $email,
	 'message'=>$message
);
$fields_sql = `,` . implode('`,`', array_keys($data)). '`';
$values_sql = '\'' . implode('\',\'', $data) . '\'';

$sql = "
	INSERT INTO `table` ($fields_sql)
	VALUES($values_sql)
";	
/*
old ways
$sql = "
	INSERT INTO `table` (`name`,`mail`,`message`)
	VALUES('$name','$email', '$message')
";
*/
echo $sql;
?>