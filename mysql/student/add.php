<?php
require  '\..\..\class\student\crud class.php';
require  '\..\..\crud\connect-db.php';

$addObject = new Student();
$add = $addObject->getAddStudent();

?>
<html>
	<body>
	<form  method ="POST">
		<input type="text" name="first_name"> First Name<br>
		<input type="text" name="last_name"> Last Name<br>
		<input type="submit" name="save" value="save">

	</form>
	</body>
</html>	

	

