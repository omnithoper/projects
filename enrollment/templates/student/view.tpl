<html>
	<head>
		<title>Student Records</title>
		<link type="text/css" rel="stylesheet" href="/enrollment/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/enrollment/css/mystyles.css" />

	</head>
	<body>		
		<nav id ="searchStudent">
			<div id="container">
				<h1>Student Records</h1>
				<form>
					<a style="float:left" href="/enrollment">(Return)</a>
					<a style="float:left"  href="/enrollment/logic/studentPaginated.php">(paginated)</a>
					<a class="pull-right btn btn-success" 
					href="/enrollment/templates/student/studentAdd.php">
					<i class="icon-plus"></i></a>
				</form>
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
						</tr>
					{/foreach}
				</table>
			</div>
		</nav>
	</body>
<html>
