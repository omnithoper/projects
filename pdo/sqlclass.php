<?php
 ini_set('display_errors', 'On');
 $db = new PDO('mysql:host=127.0.0.1;dbname=addressbook', 'root', '');

 
 $contacts = $db->query("
	SELECT * FROM contacts" 
);
$cities = $db->query("
	SELECT * FROM cityaddress"
);
/*
down vote
accepted
You want something more like this:

SELECT TableA.*, TableB.*, TableC.*, TableD.*
FROM TableA
    JOIN TableB
        ON TableB.aID = TableA.aID
    JOIN TableC
        ON TableC.cID = TableB.cID
    JOIN TableD
        ON TableD.dID = TableA.dID
WHERE DATE(TableC.date)=date(now()) 
$pets = $db->query("
	SELECT * FROM pets
");
*/
$colors = $db->query("
	SELECT * FROM colors"
);
	

//echo '<pre>', var_dump($users), '</pre>';

$colors = $colors->fetchAll(PDO::FETCH_OBJ);


 ?>
 <!DOCTYPE HTML>
 <html lang="en">
	<head>
		<Meta charset="UTF-8">
		<Title>PDO</title>
	</head>
	<body>
		<?php foreach ($colors as $color): ?>
			<div class="color">
			<h4><?php echo $color->color_id; ?></h4>
			<p><?php echo $color->name; ?></p>
			</div>
		<?php endforeach; ?>
    </body>
</html>	
	

 