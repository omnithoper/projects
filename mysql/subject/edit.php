<?php
require  '\..\..\class\subject\crud class.php';
require  '\..\..\crud\connect-db.php';

$db = new DatabaseConnect();

$subjectID = empty($_GET['subject_id'])?null:$_GET['subject_id'];
$subjectID = (empty($subjectID) && !empty($_POST['subject_id']))?$_POST['subject_id']:$subjectID;


$editObject = new Subject();
$view = $editObject->getViewSubject($subjectID);

if (!empty($_POST['edit'])){
	
	$edit = $editObject->getEditSubject($subjectID);
}
?>
<html>
	<body>
	<form action ="edit.php" method ="POST">
		<input type="hidden" name="subject_id" value="<?php echo $view['subject_id']; ?>" />
		<input type="text" name="subject" value="<?php echo $view['subject']; ?>"> First Name<br>
		<input type="text" name="subject_unit" value="<?php echo $view['subject_unit'];?>"> Last Name<br>
		<input type="submit" name="edit" value="edit"> <br>
	</form>
	</body>
</html>	
