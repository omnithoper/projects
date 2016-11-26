 <html lang="en">
    <?php include 'student logic.php'; ?>
	<?php $directory = dirname(__FILE__); ?>
	<?php require $directory . '\..\crud\connect-db.php'; ?>
	<?php new DataBaseConnect();?>
	<head>
		<Meta charset="UTF-8">
		<Title>MySQLi</title>
	</head> 
		<h1> Student Subject</h1>

	<body>
		<form action "student selection.php" method="post" autocomplete="off">
			<table border = '1'>
		
				<tr>
					<th> Math</th>
					<th> Science</th>
					<th> History</th>
				<tr>
		
			<input type="text" name="first_name" placeholder="First name">
			<input type="text" name="last_name" placeholder="Last Name">
			<button type="submit" name = "CRUD" value="Add">Add</button>
			<button type="submit" name = "CRUD" value="Update">Update</button>
			<button type="submit" name = "CRUD" value="View">View</button>
		
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
			<td><input type="radio" name="history" value=3 /> philippines</td></br>
		</tr>
		</table>
			<input type="text" name="studentName" placeholder="Math Branch">Enter Math Branch</br>
		<table border ='1'> 
			<tr>
				<th> Name </th>
				<th> Math </th>
				<th> Science </th>
				<th> History </th>
			</tr>
			<?php foreach ($studentName as $student):?>
					
				<tr>	
					<td><?php echo $student['name']; ?></td>
					<td><?php echo $mathBranch; ?></td>
					<td><?php echo $student['science']; ?></td>
					<td><?php echo $student['history']; ?></td>				
				</tr>
			<?php endforeach; ?>
		</table>	
		</form>	
	</body>
</html>	


