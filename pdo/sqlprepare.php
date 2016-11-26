<?php
 ini_set('display_errors', 'On');
 $db = new PDO('mysql:host=127.0.0.1;dbname=addressbook', 'root', '');

if (!empty($_get['name'])) {
	$contact = $db->prepare("SELECT * FROM contacts WHIRE user_id = :user_id");

	$contact->extcute([
	'user_id' => $_GET['name']
	]);
	
	var_dump($contact->fetchOject());
}
 
?>