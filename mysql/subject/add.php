<?php

require  '\..\..\crud\connect-db.php';
require  '\..\..\class\subject\crud class.php';

$subject = !empty($_POST['subject'])?$_POST['subject']:null;
$subjectUnit = !empty($_POST['subject_unit'])?$_POST['subject_unit']:null;

if ($isPost) {
	
	$addObject = new Subject();
	$add = $addObject->getAddSubject($subject, $subjectUnit);
}
?>
<html>
	<body>
		<form method="post">
			<input type="text" name="subject" /> Subject<br/>
			<input type="text" name="subject_unit" /> Subject Unit<br/>
			<input type="submit" name="save" value="save">
		</form>
	</body>
</html>