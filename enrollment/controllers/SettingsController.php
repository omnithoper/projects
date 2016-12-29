<?php
class SettingsController extends BaseController {

	public function indexAction() {
		date_default_timezone_set("Asia/Manila");
		$date = date("Y-m-d");

		$settingObject = new Settings();
		$result = $settingObject->getViewTotalPayment();
		$semester = $settingObject->getViewAllSemester(); 

		$this->assign('result', $result);
		$this->assign('semester', $semester);
		$this->assign('date', $date);

	}
}
?>