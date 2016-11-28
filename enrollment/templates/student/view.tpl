<html>
	<head>
		<title>Student Records</title>
		<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/css/mystyles.css" />

	</head>
	<body>		
		<nav id ="searchStudent">
			<div id="container">
				<h1>Student Records</h1>
				<form>
					<a style="float:left" href="/">(Return)</a>
					<a style="float:left"  href="/logic/studentPaginated.php">(paginated)</a>
					<a class="pull-right btn btn-success" 
					href="/templates/student/studentAdd.php">
					<i class="icon-plus"></i></a>
				</form>

				{if (empty($student))}
					<div class="alert alert-info">No students yet</div>
				{else}
					<table class="table table-bordered table-condensed table-striped"> 
						<p id="delete"></p>
						{foreach from=$student item=details}
							<tr>
							<td align="center">{$details.student_id}</td>
							<td align="center">{$details.first_name}</td>
							<td	align="center">{$details.last_name}</td>
							<td align="center">{$details.payed}</td>
							<td style="width: 1px; wrap: nowrap;"><a href='studentEdit.php?student_id={$details.student_id}'
							class="btn btn-danger" title="edit Student"> <i class="icon icon-edit"></i>
							</a></td>
							<td style="width: 1px; wrap: nowrap;"><a id="href_delete"href='studentDelete.php?student_id={$details.student_id}' 
							class="btn btn-danger" title="Delete Student"> <i class="icon icon-remove"></i></a></td> 	

							{if ($details.payment == 1)}
								<td style="width: 1px; wrap: nowrap;">
								<a id="href_delete"href='studentDownload.php?student_id={$details.student_id}' 
								class="btn btn-success" title="download invoice"> <i class="icon icon-download"></i></a>
							{/if}	
							</td>
							</tr>
						{/foreach}
					</table>
				{/if}
			</div>
		</nav>
	</body>
<html>
