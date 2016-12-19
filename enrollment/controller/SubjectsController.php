<?php
	class SubjectsController extends BaseController {
		public function indexAction() {
		
		$subjectObject = new Subject();
		$result = $subjectObject->getViewSubjects();
		$result = $result->fetch_all(MYSQLI_ASSOC); 
		
		$this->assign('subject', $result);

		}
	public function addAction(){

		$subject = Request::getParam('subject');
		$lecUnit = Request::getParam('lec_unit');
		$labUnit = Request::getParam('lab_unit');
		$subjectUnit = Request::getParam('subject_unit');
		
		$result = [];
		$addObject = new Subject();

		if (isset($_POST['save'])) {
			$result = $addObject->getAddSubject($subject, $lecUnit, $labUnit, $subjectUnit);
		}
		

		$this->assign('result', $result);
	}

	public function editAction() {
		$subjectID = Request::getParam('subject_id');
		$subjectID = (empty($subjectID) && !empty($_POST['subject_id']))?$_POST['subject_id']:$subjectID;


		$editObject = new Subject();
		$view = $editObject->getViewSubject($subjectID);

		$edit = [];
		if (isset($_POST['edit'])) {
			$subject = Request::getParam('subject');
			$subjectUnit = Request::getParam('subject_unit');
			$lecUnit = Request::getParam('lec_unit');
			$labUnit = Request::getParam('lab_unit');
			$edit = $editObject->getEditSubject($subject, $lecUnit, $labUnit, $subjectUnit, $subjectID);
		}

		
		$this->assign('view', $view);
		$this->assign('edit', $edit);
	}

	function deleteAction() {
	$subjectID = Request::getParam('subject_id');
	
	$deleteObject = new Subject();
	$delete = $deleteObject->getDeleteSubject($subjectID);
	}
	

}	
?>	