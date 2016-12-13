<?php
class BaseController {
	protected $_template;
	
	public function __construct() {
		$config = parse_ini_file('configuration/application.ini');
		$local = parse_ini_file('configuration/local.ini');
		$config = array_merge($config, $local);
		
		$this->_template = new Smarty();
	    $this->_template->template_dir = $config['root'].'/views/';
	    $this->_template->compile_dir = $config['root'].'/compile/';

		if (empty($_SESSION['login_user'])) {
			header('Location: /login');
		}
	}

	public function render($template) {
		$this->_template->display($template);
	}
}