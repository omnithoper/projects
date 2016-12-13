<?php
class StudentsController extends BaseController {
	public function indexAction() {
		$student = new Student();
		$students = $student->getViewStudentPaid(); 
		$this->assign('student', $students);
		$this->render('students/index.tpl');
	}

	public function editAction() {
		$studentID = Request::getParam('student_id');

		$student = new Student();
		$result = $student->getViewStudent($studentID);
		
		$edit = [];
		if (Request::isPost()) {
			$firstName = Request::getParam('first_name');
			$lastName = Request::getParam('last_name');
			$edit = $student->getEditStudent($firstName, $lastName, $studentID);

			header("Location: /students");
		}
		
		$this->assign('result', $result);
		$this->assign('edit', $edit);

		$this->render('students/edit.tpl');
	}
}