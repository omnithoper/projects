<?php

require_once 'db.php';
if (!empty($_POST)) {
	
	$email = $db->escape_string($_POST['email']);
	$firstName = $db->escape_string($_POST['first_name']);
	$lastName = $db->escape_string($_POST['last_name']);
	
	$prepared = $db->prepare("
	INSERT INTO users (email, first_name, last_name)
	VALUES (?, ?, ?)
");	
	
	$prepared->bind_param('sss', $email, $firstName, $lastName);
	
	$prepared->execute();
}
/* escapping database
if (!empty($_POST)) {
	
	$email = $db->escape_string($_POST['email']);
	$firstName = $db->escape_string($_POST['first_name']);
	$lastName = $db->escape_string($_POST['last_name']);
	
	$insert = $db->query("
	INSERT INTO users (email, first_name, last_name)
	VALUES ('{$email}', '{$firstName}', '{$lastName}')
");	
}
*/
/* insert record
$insert = $db->query("
	INSERT INTO users (email, first_name, last_name)
	VALUES ('')
");
var_dump($insert); 
*/
/*
$cityResult = [];
$allCity = [];
while ($city = $cities->fetch_array()){
	$cityResult['city_id'] = $city['city_id'];
	$cityResult['city_name'] = $city['name'];
	$allCity [] = $cityResult;
}
var_dump($allCity);
foreach ($allCity as $city) {
	echo $city['city_id'], ' ' . $city['city_name'] , '<br>';
}
$city = new City();
echo $city->_city;
var_dump($allCity);

$area = 'malabon'; 
class City {
	public $_city = $area;
}
*/
?>
 <html lang="en">
	<head>
		<Meta charset="UTF-8">
		<Title>MySQLi</title>
	</head>
	<body>
		<form action "mysqldatabase.php" method="post" autocomplete="off">
			<input type="text" name="email" placeholder="Email">
			<input type="text" name="first_name" placeholder="First name">
			<input type="text" name="last_name" placeholder="Last Name">
			<input type="submit" value="Sign In">
		</form>	
    </body>
</html>	
 
   