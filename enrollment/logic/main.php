<?php

	defined('DS')? NULL: define('DS', DIRECTORY_SEPARATOR);
	
	defined('SITE_ROOT')? NULL: 
		define('SITE_ROOT', DS.'Users' .DS.'omnithopter' .DS.'Documents' .DS.'projects' .DS.'enrollment');
		
	defined('LIB_PATH')? NULL: define('LIB_PATH', SITE_ROOT.DS.'logic');
	
	require_once(LIB_PATH.DS."connect-db.php");
	require_once(LIB_PATH.DS."method-post.php");
?>