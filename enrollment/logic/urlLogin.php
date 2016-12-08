<?php
	require  'main.php';  
	require '../classes/admin.php';

	$userName = empty($_SERVER['PHP_AUTH_USER'])?'user':$_SERVER['PHP_AUTH_USER'];
	$password = empty($_SERVER['PHP_AUTH_PW'])?'pass':$_SERVER['PHP_AUTH_PW'];
	
	$adminObject = new Admin();	
	$result = $adminObject->getUserPassword($userName, $password);  
	

	$validated = (!empty($userName) == !empty($result['username']) &&  !empty($password) == !empty($result['password']));
	var_dump($validated);
	 
	if (!$validated) {
	  header('WWW-Authenticate: Basic realm="My Realm"');
	  header('HTTP/1.0 401 Unauthorized');
	  	clearstatcache();
	  die ("Not authorized");
	}

	//header("Location: /");   

	echo "<p>Welcome $userName.</p>";
	echo "<p>Congratulation, you are into the system.</p>";

?>