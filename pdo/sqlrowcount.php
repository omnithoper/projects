<?php
$db = new PDO('mysql:host=127.0.0.1;dbname=addressbook', 'root', ''); 

$contactsQuery = $db->query("SELECT * FROM contacts" );

$cities = $db->query("SELECT COUNT(user_id) AS count FROM contacts"); 
	echo $cities->fetchObject()->count;

$contacts = $contactsQuery->fetchAll(PDO::FETCH_OBJ);

?>  
 <!DOCTYPE HTML>
 <html lang="en">
	<head>
		<Meta charset="UTF-8">
		<Title>PDO</title>
	</head>
	<body>
		<p> There are <?php echo $contactsQuery->rowCount(); ?> register contacts. </p>		
		<?php foreach ($contacts as $contact): ?>
			<div class="contact">
			<h4><?php echo $contact->user_id; ?></h4>		
			<p><?php echo $contact->name; ?></p>
			</div>
		<?php endforeach; ?>
    </body>
</html>	