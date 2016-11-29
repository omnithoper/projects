<html>
	<head>	
		<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/css/mystyles.css" />
	</head>
	<body>
		<nav id ="searchStudent">
			<div id="container">
			<form>
				<a style="float:left" href="/">(Return)</a>
			</form>
				<table class="table table-bordered table-condensed table-striped">
					<tr>
						<th>Number Of Allowed Units</th>
						<th>Price/Unit</th>
						<th>Price Of Misc</th>
					</tr>
					{foreach from=$result item=details}
						<tr>
						<td align="center">{$details.number_of_allowed_units}</td>
						<td align="center">{$details.price_per_unit}</td>
						<td	align="center">{$details.price_of_misc}</td>
						</tr>
					{/foreach}
				</table>	
					<br/>
					<br/>
				<table class="table table-bordered table-condensed table-striped">	
					<a class="pull-right btn btn-success" 
					href="/templates/setting/semesterAdd.php">
					<i class="icon-plus"></i></a>
					<tr>
						<th>Semester ID</th>
						<th>Date Start</th>
						<th>Date End</th>
					</tr>

					{foreach from=$semester item=details}	
					{if ($details.date_start < $date && $details.date_end > $date)}
						<tr style="background-color:green;">
					{else}
						<tr>
					{/if}
						<td align="center">{$details.semester_id}</td>
						<td align="center">{$details.date_start}</td>
						<td	align="center">{$details.date_end}</td>
						<td style="width: 1px; wrap: nowrap;"><a href='semesterEdit.php?semester_id={$details.semester_id}'
						class="btn btn-danger" title="edit Subject"> <i class="icon icon-edit"></i>
						</a></td>
						<td style="width: 1px; wrap: nowrap;"><a href='semesterDelete.php?semester_id={$details.semester_id}' 
						class="btn btn-danger" title="Delete Subject"> <i class="icon icon-remove"></i></a></td>
					</tr>
					{/foreach}
				</table>	
			</div>
		</nav>	
	</body>
<html>

