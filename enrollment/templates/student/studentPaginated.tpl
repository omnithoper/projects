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
						{for $show_page=1 to $show_page<=$total_pages max=$show_page++}
								<a href='studentPaginated.php?page="{$show_page}"'>{$show_page}</a> 		
						{/for}	
					</p>	
						<table class="table table-bordered table-condensed table-striped"> 
						<tr> <th>ID</th> <th>First Name</th> <th>Last Name</th> <th></th> <th></th></tr>
						{for $show_page=$start to $show_page<$end max=$show_page++}
							{if ($show_page == $total_results)}  
								{break}
							{/if}

							{$result->data_seek({$show_page})}
							{$row = $result->fetch_row()}
						
							<td>{$row[0]}</td>
							<td>{$row[4]} </td>
							<td>{$row[5]}</td>
							<td><a href='../../enrollment/templates/student/studentEdit.php?student_id="{$row[0]}"'>
							Edit</a></td>
							<td><a href='../../enrollment/templates/student/studentDelete.php?student_id="{$row[0]}"'>
							Delete</a></td>
						</tr>
						{/for}
					</table>
			</div>
		</nav>		
	</form>
	</body>
</html>