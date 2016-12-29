<?php
class AdminController extends BaseController {

	public function indexAction() {

		$adminObject = new Admin();
		$result = $adminObject->getViewadmin();
	

		$this->assign('result', $result);
	}

	public function addAction() {

	$userName = Request::getParam('username');
	$password = Request::getParam('password');


	$addObject = new Admin();
	$result=[];
	
	if (isset($_POST['save'])){
		$result = $addObject->getAddAdmin($userName, sha1($password));
	}

	$this->assign('result', $result);
	$this->assign('username', $userName);
	$this->assign('password', $password);

	}

	public function editAction() {
		//$db = new DatabaseConnect();

		$userID = Request::getParam('user_id');
		$userID = (empty($userID) && !empty($_POST['user_id']))?$_POST['user_id']:$userID;


		$editObject = new Admin();
		$view = $editObject->getViewUser($userID);

		$result = [];
		if (isset($_POST['save'])) {
			$userName = Request::getParam('username');
			$password = Request::getParam('password');
			$result = $editObject->getEditUser($userName, $password, $userID);

		}
	
		$this->assign('result', $result);
		$this->assign('username', $view[0]['username']);
		$this->assign('password', $view[0]['password']);
	}

	public function deleteAction() {
		$userID = Request::getParam('user_id');

		$deleteObject = new Admin();
		$delete = $deleteObject->getDeleteUser($userID);
	}
}
?>