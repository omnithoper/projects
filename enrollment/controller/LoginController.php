<?php
class LoginController {
	public function indexAction() {
		$config = parse_ini_file('configuration/application.ini');
		$local = parse_ini_file('configuration/local.ini');
		$config = array_merge($config, $local);

		$smarty = new Smarty();
	    $smarty->template_dir = $config['root'].'/templates/';
	    $smarty->compile_dir = $config['root'].'/compile/';
	}

	public function loginAction() {
	    $myusername = Request::getParam('username');
	    $mypassword = Request::getParam('password'); 

	    $adminObject = new Admin();
	    $result = $adminObject->getUserPassword($myusername, $mypassword); 
	    header('Location: /');
	}
	
	public function logoutAction() {
		if (!empty($_SESSION['login_user'])) {
			unset($_SESSION['login_user']);
		}
		session_destroy();
	    header('Location: /');
	}

	public function dispatch($controllerName, $actionName){
		if (empty($controllerName)) {
			$controllerName = 'login';
		}
		
		if (empty($actionName)) {
			$actionName = 'login';
		}
<<<<<<< HEAD
			$smarty = new Smarty();
		$smarty->template_dir = $config['root'].'/templates/';
=======
		
		$config = parse_ini_file('configuration/application.ini');
		$local = parse_ini_file('configuration/local.ini');
		$config = array_merge($config, $local);

		$smarty = new Smarty();	
	    $smarty->template_dir = $config['root'].'/templates/';
>>>>>>> abe6eae22d5b192fc2c2fef2b376f8c8d333f04c
	    $smarty->compile_dir = $config['root'].'/compile/';
		$smarty->display($controllerName.'/'.$actionName.'.'.'tpl');
	}
}