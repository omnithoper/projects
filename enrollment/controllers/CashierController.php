<?php
class CashierController extends BaseController {

	public function indexAction() {
	
		$studentID = Request::getParam('studentID');
		$studentName = Request::getParam('studentName');

		$settingObject = new Settings();
		$cashierObject =  new Cashier();
		$priceMisc = $settingObject->getPriceMisc();
		$totalPrice = $cashierObject->getTotalPrice($studentID);
		$totalUnitPrice = $cashierObject->getTotalUnitPrice($studentID);
		$totalLecUnitPrice = $cashierObject->getTotalLecturePrice($studentID);
		$totalLabUnitPrice = $cashierObject->getTotalLaboratoryPrice($studentID);

		$studentSubjectObject = new studentSubjectMatch();
		$allSubject = $studentSubjectObject->getStudentSubjects($studentID);
		$paymentObject = new Payment();

		$subjectObject = new  Subject();
		$totalUnit = $subjectObject->getCurrentUnits($studentID);
		$totalLecUnit = $subjectObject->getLectureUnits($studentID);
		$totalLabUnit = $subjectObject->getLaboratoryUnits($studentID);

		$smarty = new Smarty();
		$smarty->template_dir = '../../templates/cashier/';
		$smarty->compile_dir = '../../compile/';

		$this->assign('allSubject', $allSubject);
		$this->assign('totalLecUnit', $totalLecUnit);
		$this->assign('totalLabUnit', $totalLabUnit);
		$this->assign('totalLecUnitPrice', $totalLecUnitPrice);
		$this->assign('totalLabUnitPrice', $totalLabUnitPrice);	
		$this->assign('studentID', $studentID);
		$this->assign('totalUnit', $totalUnit);
		$this->assign('totalUnitPrice', $totalUnitPrice);
		$this->assign('studentName', $studentName);
		$this->assign('priceMisc', $priceMisc);
		$this->assign('totalPrice', $totalPrice);
		}

}	