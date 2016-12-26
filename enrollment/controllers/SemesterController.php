<?php
class SemesterController extends BaseController {

	public function addAction(){

		$dateStart = Request::getParam('date_start');
		$dateEnd = Request::getParam('date_end');

		$addObject = new Settings();
		$result=[];
		
		if (isset($_POST['save'])){
			$result = $addObject->getAddSemester($dateStart, $dateEnd);
		}
		

		$this->assign('result', $result);
		$this->assign('dateStart', $dateStart);
		$this->assign('dateEnd', $dateEnd);

	}

	public function editAction() {

		$semesterID = Request::getParam('semester_id');
		$semesterID = (empty($semestID) && !empty($_POST['semester_id']))?$_POST['semester_id']:$semesterID;


		$editObject = new Settings();
		$view = $editObject->getViewSemester($semesterID);

		$edit = [];
		if (isset($_POST['edit'])) {
			$dateStart = Request::getParam('date_start');
			$dateEnd = Request::getParam('date_end');
			$edit = $editObject->getEditSemester($dateStart, $dateEnd, $semesterID);

		}

		
		$this->assign('view', $view);
		$this->assign('edit', $edit);
	}
	public function deleteAction() {
			
	$semesterID = Request::getParam('semester_id');
	
	$deleteObject = new Settings();
	$delete = $deleteObject->getDeleteSemester($semesterID);
	}
}
?>