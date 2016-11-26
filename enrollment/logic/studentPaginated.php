<?php

	require 'main.php';
	require '../classes/student.php';
	require '../lib/smarty/Smarty.class.php'; 
	
	$db = new DatabaseConnect();
	$studentObject = new Student();
	$result = $studentObject->getViewStudents(); 

	$per_page = 5;
	$total_results = $result->num_rows;
	$total_pages = ceil($total_results / $per_page);
  	$show_page = Request::getParam('page');
  	$start = ($show_page -1) * $per_page;
	$end = $start + $per_page;

	$smarty = new Smarty();
	$smarty->template_dir = '../templates/student/';
	$smarty->compile_dir = '../templates/student/';

	$smarty->assign('per_page', $per_page);
	$smarty->assign('total_results', $total_results);	
	$smarty->assign('total_pages', $total_pages);
	$smarty->assign('show_page', $show_page);
	$smarty->assign('start', $start);
	$smarty->assign('end', $end);


?>
<html>
	<head>
		<title>Student Records</title>
		<link type="text/css" rel="stylesheet" href="/enrollment/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/enrollment/css/mystyles.css" />
	</head>
	<body>
	<form>
		<nav id="searchStudent">
			<div id="container">
				<h1>Student Records</h1>
					<a style="float:left" href="/enrollment">(Return)</a>
					<a class="pull-right btn btn-success" href="/enrollment/templates/student/studentAdd.php">
					<i class="icon-plus"></i></a></br>
					<p><a href='../../enrollment/templates/student/'>View All</a> | <b>View Page:</b>
						<?php for ($show_page = 1; $show_page <= $total_pages; $show_page++): ?>
								<?php echo "<a href='studentPaginated.php?page=$show_page'>$show_page</a>" ?> 		
						<?php endfor;?>		
					</p>	
						<table class="table table-bordered table-condensed table-striped"> 
						<tr> <th>ID</th> <th>First Name</th> <th>Last Name</th> <th></th> <th></th></tr>

						
						<?php for ($show_page = $start; $show_page < $end; $show_page++): ?>
						
							<?php if ($show_page == $total_results): ?>  
							<?php return true; ?> 
							<?php endif; ?>

							<?php $result->data_seek($show_page); ?>

							<?php $row = $result->fetch_row(); ?>
						
							<td><?php echo"$row[0]";?></td>
							<td><?php echo"$row[4]";?> </td>
							<td><?php echo "$row[5]";?> </td>
							<td><?php echo "<a href='../../enrollment/templates/student/studentEdit.php?student_id=" . $row[0] . "'>Edit</a>"?> </i></td>
							<td style="width: 1px; wrap: nowrap;"><?php echo "<a href='../../enrollment/templates/student/studentDelete.php?student_id=" . $row[0] . "'>Delete</a>"?><i class="icon icon-remove"></i></td>
		
						</tr>
						<?php endfor; ?>
					</table>
			</div>
		</nav>		
	</form>
	</body>
</html>