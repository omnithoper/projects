<?php
class StudentsController extends BaseController {
	public function indexAction() {
		$student = new Student();
		$students = $student->getViewStudentPayed(); 
		$this->_template->assign('student', $students);
		$this->render('students/index.tpl');
	}
}