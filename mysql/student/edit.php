<?php
require  '\..\..\class\student\crud class.php';
require  '\..\..\crud\connect-db.php';

$db = new DatabaseConnect();

$studentID = empty($_GET['student_id'])?null:$_GET['student_id'];
$studentID = (empty($studentID) && !empty($_POST['student_id']))?$_POST['student_id']:$studentID;


$editObject = new Student();
$view = $editObject->getViewStudent($studentID);

if (isset($_POST['edit'])){
	
	$edit = $editObject->getEditStudent($studentID);
	
}
?>
<html>
	<body>
	<form action ="edit.php" method ="POST">
		<input type="hidden" name="student_id" value="<?php echo $view['student_id']; ?>" />
		<input type="text" name="first_name" value="<?php echo $view['first_name']; ?>"> First Name<br>
		<input type="text" name="last_name" value="<?php echo $view['last_name'];?>"> Last Name<br>
		<input type="submit" name="edit" value="edit"> <br>
	</form>
	</body>
</html>	
