<?php
ini_set('display_errors', 'On');

class Contacts
{
	public function getFullName() 
	{
	return "{$this->user_id} {$this->name}"; 
	}	
}
 
$db = new PDO('mysql:host=127.0.0.1;dbname=addressbook', 'root', ''); 
$contacts = $db->query("
	SELECT * FROM contacts" 
);

$contacts->setFetchMode(PDO::FETCH_CLASS, 'Contacts');

//var_dump($contacts->name);

while ($contact = $contacts->fetch()){
	//echo $contact->name, '<br>';
	echo $contact->getFullName(), '<br>';
}
?>
