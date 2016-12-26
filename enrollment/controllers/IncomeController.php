<?php
class IncomeController extends BaseController {

	public function indexAction() {
		$semDate = Request::getParam('semDate');
		$date = explode(',' , $semDate);
		$dateStart = empty($date[0])?NULL:$date[0];
		$dateEnd = empty($date[1])?NULL:$date[1];
		

		$settingObject = new Settings();
		$result = $settingObject->getPaymentDate($dateStart, $dateEnd);

		$semesterDate = $settingObject->getViewAllSemester();
		$income = $settingObject->getSemesterTotalIncome($dateStart, $dateEnd);
		$totalAmount = empty($income[0]['total_amount'])?NULL:$income[0]['total_amount'];
		$change = empty($income[0]['change'])?NULL:$income[0]['change'];
		$totalPaid = empty($income[0]['total_paid'])?NULL:$income[0]['total_paid'];


		$this->assign('result', $result);
		$this->assign('semesterDate', $semesterDate);
		$this->assign('totalAmount', $totalAmount);
		$this->assign('change', $change);
		$this->assign('totalPaid', $totalPaid);
	}
}		
?>		