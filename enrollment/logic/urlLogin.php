<?php
	require '../classes/admin.php';
	require 'main.php';
	
	
	$userName = empty($_SERVER['PHP_AUTH_USER'])?'user':$_SERVER['PHP_AUTH_USER'];
	$password = empty($_SERVER['PHP_AUTH_PW'])?'pass':$_SERVER['PHP_AUTH_PW'];

	$adminObject = new Admin();	
	$result = $adminObject->getUserPassword($userName, $password); 
	$validated = ($userName == $result['username'] &&  $password == $result['password']);
	var_dump($result);

	if (!$validated) {
		header('WWW-Authenticate: Basic realm="My Realm"');
		header('HTTP/1.0 401 Unauthorized');
		unset($_SERVER['PHP_AUTH_USER']);
		unset($_SERVER['PHP_AUTH_PW']);
	  die ("Not authorized");
	}

	//header("Location: /");   
	echo "<p>Welcome $userName.</p>";
	echo "<p>Congratulation, you are into the system.</p>";

?>