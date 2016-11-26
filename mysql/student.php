<?php

$db = new mysqli('127.0.0.1', 'root', '' ,'student subjects');



if ((!empty($_POST)) && (!empty($_POST['math'])) && (!empty($_POST['science'])) && (!empty($_POST['history']))) {
	
	$science = $db->escape_string($_POST['science']);
	$history = $db->escape_string($_POST['history']);
	$math = $db->escape_string($_POST['math']);
	$firstName = $db->escape_string($_POST['first_name']);
	$lastName = $db->escape_string($_POST['last_name']);
	
	$prepared = $db->prepare("
	INSERT INTO student (science_id, history_id, math_id, first_name, last_name)
	VALUES (?, ?, ?, ?, ?)
");	
	
	$prepared->bind_param('sssss', $science, $history, $math ,$firstName, $lastName);
	
	$prepared->execute();
}
?>
	
 <html lang="en">
	<head>
		<Meta charset="UTF-8">
		<Title>MySQLi</title>
	</head> 
		<h1> Studen Subject</h1>
	<table border = '1'>
		
		<tr>
		<th> Math</th>
		<th> Science</th>
		<th> history</th>
		<tr>
		
	<body>
		<form action "mysqldatabase.php" method="post" autocomplete="off">
		<input type="text" name="first_name" placeholder="First name">
		<input type="text" name="last_name" placeholder="Last Name">
		<input type="submit" value="Sign In">
		
		<tr>
		<td><input type="radio" name="math" value=1 /> algebra</td>
		<td><input type="radio" name="science" value=1 />  biology</td>
		<td><input type="radio" name="history" value=1 /> american</td>
		</tr>

		<tr>
		<td><input type="radio" name="math" value=2 /> anageo</td>
		<td><input type="radio" name="science" value=2 /> chemistry</td>
		<td><input type="radio" name="history" value=2 /> britain</td>
		</tr>
		
		<tr>
		<td><input type="radio" name="math" value=3 /> trigonometry</td>
		<td><input type="radio" name="science" value=3 />  physics<br /></td>
		<td><input type="radio" name="history" value=3 /> philippines</td>
		</tr>

		</form>	
    </body>
</html>	
 