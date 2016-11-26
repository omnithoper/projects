 <?php
 /*
 database errors handling
 ini_set('display_errors', 'On');
 try {
 $db = new PDO('mysql:host=127.0.0.1;dbname=123', 'root', '');
 } catch(PDOException $e) {
	 die('site is down');
 //var_dump($e->getmessage());
 }
 */

 ini_set('display_errors', 'On');
 $db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', '');
$users = $db->query("
	SELECT * FROM users"
);

$users = $users->fetchALL(PDO::FETCH_OBJ);
 ?>
 <!DOCTYPE HTML>
 <html lang="en">
	<head>
		<Meta charset="UTF-8">
		<Title>PDO</title>
	</head>
	<body>
		<?php foreach ($users as $user): ?>
			<div class="user">
			<h4><?php echo $user->first_name; ?></h4>
			<p><?php echo $user->email; ?></p>
			</div>
		<?php endforeach; ?>
    </body>
</html>	
	