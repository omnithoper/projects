<?php
require  '\..\..\crud\connect-db.php';
require  '\..\..\class\student\crud class.php';
require  '\..\..\class\subject\crud class.php';
require  '\..\..\class\student subject\student subject class.php';
$studentName = (isset($_POST['studentName']))?($_POST['studentName']):NULL;
$selected = empty($_GET['selected'])?NULL:$_GET['selected'];
$selected = (empty($selected) && !empty($_POST['selected']))?$_POST['selected']:$selected;
$selected = (empty($student_id) && !empty($_GET['student_id']))?$_GET['student_id']:$selected;
$studentLastName = NULL;
$studentFullName = NULL;
$selected_val = NULL;
$students = [];
$getSubjectID = NULL;

$subjectObject = new subject();
$subject = $subjectObject->getSubjects();

$studentLastNameObject = new student();

if (!empty($_POST['studentName'])){
	$students = $studentLastNameObject->getAllStudentInformation($studentName);
	$selected = null;
}

if (!empty($selected)) {
	$selectedStudent = $studentLastNameObject->getViewStudent($selected);

}
if (count($students) == 1) {
	$selectedStudent = $students[0];
	$selected = $students[0]['student_id'];
}

$subjectID = empty($_POST['getSubjectID'])?NULL:$_POST['getSubjectID'];
$studentID = !empty($students[0]['student_id'])?$students[0]['student_id']:$selected;

$studentSubjectObject = new studentSubjectMatch();
$studentSubject = $studentSubjectObject->getAddStudentSubjectID($studentID, $subjectID);
$delete = $studentSubjectObject->getDeleteSubject();
$allSubject = $studentSubjectObject->getStudentSubjects($studentID);
var_dump($allsubject);

?>
<html>
	<body>
		<form action ="student_enroly.php" Method="POST">
			<h1>Student Name</h1>
			<input type="hidden" name="selected" value="<?php echo $selected; ?>" />
			Name:<input type="text" name="studentName">
			<input type="submit" name="search" value="search">
			<button type="submit"><a href="/mysql/enrol.php">Back</a></button></br>	
			<?php if (!empty($students) && empty($selectedStudent)): ?>
				<ul>
					<?php foreach ($students as $student): ?>
						<li>
							<?php echo $student['last_name'].', '.$student['first_name']; ?>
							<button type="submit">
							(<a href="/mysql/student/student_enroly.php?selected=<?php echo $student['student_id']; ?>">select</a>)
							</button>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</form>
			
		<form method="post">
			<?php if (!empty($selectedStudent)) : ?>
				<?php echo 'SELECTED NAME:'. $selectedStudent['full_name'];?></br>
				<br />
				<h1>Enroll to Subject</h1>
				<input type="hidden" name="selected" value="<?php echo $selected; ?>" />
				<select name="getSubjectID">			
					<?php foreach ($subject as $subjects):?>
						<option value="<?php echo $subjects['subject_id']; ?>"> <?php echo $subjects['subject'];?></option>	
					<?php endforeach;?>	
				</select>	
<!--
				<button type="submit" name="saveSubject" value="saveSubject">
					<a href="/mysql/student/student_enroly.php?selected=<?php echo $studentID; ?>
					&subject_ID=3">Save</a>
				</button></br>
-->
				<button type="submit" name="saveSubject" value="saveSubject">
					Save
				</button></br>
				<?php $getSubjectID = !empty($_POST['getSubjectID'])?$_POST['getSubjectID']:NULL; ?>
			<?php endif; ?>
			
			<?php if (!empty($selectedStudent) && !empty($allSubject)): ?>
				<h1><?php echo "Student Enroll Subjects";?></br><h1>
				<br />
				<table style ="width:100%;background-color:green;color:white" border ="1"> 
					<tr>
						<th>Student ID</th>
						<th>Subject</th>
						<th>Subject UNIT</th>
					</tr>
					<?php $totalUnit = NULL;?>
					<?php foreach ($allSubject as $subject):?>
							<tr>
							<td><?php echo  $subject['subject_id']; ?></td>
							<td><?php echo  $subject['subject']; ?></td>
							<td><?php echo  $subject['subject_unit']; ?></td>
							<td><a href="/mysql/student/student_enroly.php?subject_id=<?php echo $subject['subject_id']; ?>
							&student_id=<?php echo $subject['student_id']; ?> ">delete</a><td>
							<?php $result['unit'] = $subject['subject_unit'];?>
							<?php $totalUnit = $totalUnit + $subject['subject_unit'];?>
							</tr>
					<?php endforeach; ?>	
				</table>
				<label for="Total" style="float: right">Total:
					<input style="float: right" type="text" value="<?php echo $totalUnit;?>">
				</label>
			<?php endif; ?>
		</form>
	</body>
</html>	