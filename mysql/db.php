<?php

$db = new mysqli('127.0.0.1', 'root', '', 'addressbook');

if ($db->connect_errno !== 0) {
	die('We are down in a moment . try again soon');
}
// $contacts = $db->query("SELECT * FROM contacs");
?>