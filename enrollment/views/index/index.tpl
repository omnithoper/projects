{extends file='layout/layout.tpl'}

{block name=head}
	<link type="text/css" rel="stylesheet" href="/css/mystyles.css" />
{/block}

{block name=body}
	<form>
		<div id="container"> 
			<table class="table table-bordered table-condensed table-striped"> 
				<tr><td><a href="/Students" class="btn btn-block">View students</a></td></tr>
				<tr><td><a href="/Subjects/" class="btn btn-block">View subjects</a></td></tr>
				<tr><td><a href="/StudentsSubjects/" class="btn btn-block">Enroll</a></td></tr>
				<tr><td><a href="/Settings/" class="btn btn-block">Setting</a></td></tr>
				<tr><td><a href="/Admin/" class="btn btn-block">Admin</a></td></tr>
				<tr><td><a href="/Income/" class="btn btn-block">Income</a></td></tr>
				<tr><td><a href="/login/logout" class="btn btn-block">Log Out</a></td></tr>
			</table>
		</div>
	</form>
{/block}