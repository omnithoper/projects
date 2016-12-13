<?php
class StudentsController extends BaseController {
	public function indexAction() {
		$student = new Student();
		$students = $student->getViewStudentPaid(); 
		$this->_template->assign('student', $students);
		$this->render('students/index.tpl');
	}

	public function editAction() {
		$studentID = Request::getParam('student_id');

		$editObject = new Student();
		$result = $editObject->getViewStudent($studentID);
		
		$edit = [];
		if (isset($_POST['edit'])) {
			$firstName = Request::getParam('first_name');
			$lastName = Request::getParam('last_name');
			$edit = $editObject->getEditStudent($firstName, $lastName, $studentID);

			header("Location: /students");
		}
		
		$this->_template->assign('result', $result);
		$this->_template->assign('edit', $edit);

		$this->render('students/edit.tpl');
	}
}