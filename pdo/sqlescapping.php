<?php
$db = new PDO('mysql:host=127.0.0.1;dbname=addressbook', 'root', ''); 

if (!empty($_GET['name'])) {
	echo $user_id = $_GET['name'];
	die();
}

$contacts = $db->query("SELECT * FROM contacts WHERE user_id = 1" );
var_dump($contacts->fetchObject());
?>
