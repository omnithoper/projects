<?php
class LoginController {
	public function indexAction() {
		$config = parse_ini_file('configuration/application.ini');
		$local = parse_ini_file('configuration/local.ini');
		$config = array_merge($config, $local);
		
		$smarty = new Smarty();
	    $smarty->template_dir = $config['root'].'/templates/';
	    $smarty->compile_dir = $config['root'].'/compile/';

		$smarty->display('login/login.tpl');
	}

	public function loginAction() {
	    $myusername = Request::getParam('username');
	    $mypassword = Request::getParam('password'); 

	    $adminObject = new Admin();
	    $result = $adminObject->getUserPassword($myusername, $mypassword); 
	    header('Location: /');
	}
	
	public function logoutAction() {
		session_start();
		if (!empty($_SESSION['login_user'])) {
			unset($_SESSION['login_user']);
		}
		session_destroy();
	}
}