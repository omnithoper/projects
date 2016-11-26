<?php
require  '\..\..\crud\connect-db.php';
$db = new DatabaseConnect();

	$result = $db->connection->query("SELECT * FROM subjects ORDER BY subject_id");

?>
<html>

	<body>
	<form>
		<button type="submit"><a href="\mysql\enrol.php">Return</a></button>
		<button style="float: right" type="submit"><a href="\mysql\subject\add.php">Add</a></button>
	</form>
	<table style ="width:100%;background-color:green;color:white" border ="1"> 
	<?php $result = $result->fetch_all(MYSQLI_ASSOC); ?>
	<?php foreach ($result as $details):?>
	<tr>
	<td align="center" ><?php echo $details['subject_id']; ?></td>
	<td align="center"><?php echo $details['subject']; ?></td>
	<td	align="center"><?php echo $details['subject_unit']; ?></td>
	<td align="center"><?php echo "<a href='edit.php?subject_id=". $details['subject_id']. "'>edit</a>"?></td>
	<td align="center"><?php echo "<a href='delete.php?subject_id=". $details['subject_id']. "'>delete</a>"?></td>
	</tr>
	<?php endforeach;?>
	</table>
	</body>
<html>
