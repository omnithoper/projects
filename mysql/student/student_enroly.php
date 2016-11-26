<?php
require  '\..\..\crud\connect-db.php';
require  '\..\..\crud\method-post.php';
require  '\..\..\class\student\crud class.php';
require  '\..\..\class\subject\crud class.php';
require  '\..\..\class\student subject\student subject class.php';

$studentName = Request::getParam('studentName');
$studentID = Request::getParam('studentID');
$getSubjectID = Request::getParam('getSubjectID');
$subjectID = Request::getParam('subjectID');
$students = [];

$subjectObject = new subject();
$studentSubjectObject = new studentSubjectMatch();
$studentLastNameObject = new student();
$subject = $subjectObject->getSubjects();
$students = $studentLastNameObject->getAllStudentInformation($studentName);
$selectedStudent = $studentLastNameObject->getViewStudent($studentID);

if (count($students) == 1) {
	$selectedStudent = $students[0];
	$studentID = $students[0]['student_id'];
}

$studentSubject = $studentSubjectObject->getAddStudentSubjectID($studentID, $getSubjectID);
$delete = $studentSubjectObject->getDeleteSubject($studentID, $subjectID);
$allSubject = $studentSubjectObject->getStudentSubjects($studentID);
?>
<html>
	<body>
		<form action ="student_enroly.php" Method="POST">
			<h1>Student Name</h1>
			Name:<input type="text" name="studentName">
			<input type="submit" name="search" value="search">
			<button type="submit"><a href="/mysql/enrol.php">Back</a></button></br>	
			<?php if (!empty($students) && empty($selectedStudent)): ?>
				<ul>
					<?php foreach ($students as $student): ?>
						<li>
							<?php echo $student['last_name'].', '.$student['first_name']; ?>
							<button type="submit">
							(<a href="/mysql/student/student_enroly.php?studentID=<?php echo $student['student_id']; ?>">select</a>)
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
				<input type="hidden" name="studentID" value="<?php echo $studentID; ?>" />
				<select name="getSubjectID">			
					<?php foreach ($subject as $subjects):?>
						<option value="<?php echo $subjects['subject_id']; ?>"> <?php echo $subjects['subject'];?></option>	
					<?php endforeach;?>	
				</select>	
				
				<button type="submit" name="saveSubject" value="saveSubject">
					Save
				</button></br>
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
							<td><a href="/mysql/student/student_enroly.php?subjectID=<?php echo $subject['subject_id']; ?>
							&studentID=<?php echo $subject['student_id']; ?> ">delete</a><td>
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
