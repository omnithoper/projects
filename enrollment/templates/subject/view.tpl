<html>
	<head>	
		<link type="text/css" rel="stylesheet" href="/enrollment/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/enrollment/css/mystyles.css" />
	</head>
	<body>
		<nav id ="searchStudent">
			<div id="container">
			<form>
				<a style="float:left" href="/enrollment">(Return)</a>
				<a class="pull-right btn btn-success"  type="submit"href="subjectAdd.php"><i class="icon icon-plus"></i></a>
			</form>
				<table class="table table-bordered table-condensed table-striped">
					{foreach from=$subject item=details}
						<tr>
						<td align="center">{$details.subject_id}</td>
						<td align="center">{$details.subject}</td>
						<td	align="center">{$details.subject_unit}</td>
						<td style="width: 1px; wrap: nowrap;"><a href='subjectEdit.php?subject_id={$details.subject_id}'
						class="btn btn-danger" title="edit Subject"> <i class="icon icon-edit"></i>
						</a></td>
						<td style="width: 1px; wrap: nowrap;"><a href='subjectDelete.php?subject_id={$details.subject_id}' 
						class="btn btn-danger" title="Delete Subject"> <i class="icon icon-remove"></i></a></td>
						</tr>
					{/foreach}
				</table>
			</div>
		</nav>	
	</body>
<html>

