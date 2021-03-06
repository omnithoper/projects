{extends file='layout/layout.tpl'}

{block name=title}
	Student Listing
{/block}

{block name=head}
	<link type="text/css" rel="stylesheet" href="/css/mystyles.css" />
{/block}

{block name=body}
	<nav id ="searchStudent">
		<div id="container">
			<div class="navbar">
				<div class="navbar-inner">
						<h1>student Records</h1>
					<form class="navbar-form pull-right">
					  	<a type="button" class="btn" href="/">return</a>
					</form>
				</div>
			</div>
			<form>
				<a style="float:left"  href="/logic/studentPaginated.php">(paginated)</a>
				<a class="pull-right btn btn-success" href="/students/add">
					<i class="icon-plus"></i>
				</a>
			</form>

			{if (empty($student))}
				<div class="alert alert-info">No students yet</div>
			{else}
				<table class="table table-bordered table-condensed table-striped"> 
					<p id="delete"></p>
					<tr>
						<th>ID</th>
						<th>FirstName</th>
						<th>LastName</th>
						<th>Status</th>
						<th>Actions</th>
					</tr>
					{foreach from=$student item=details}
						<tr>
						<td align="center">{$details.student_id}</td>
						<td align="center">{$details.first_name}</td>
						<td	align="center">{$details.last_name}</td>
						<td align="center">{$details.payed}</td>
						<td style="width: 1px; wrap: nowrap;" nowrap>
							<a href='/students/edit?student_id={$details.student_id}' class="btn" title="edit Student"> 
								<i class="icon icon-edit"></i>
							</a>

							<a id="href_delete"href='students/delete?student_id={$details.student_id}' 
						class="btn btn-danger" title="Delete Student"> 
								<i class="icon icon-remove"></i>
							</a>

							{if ($details.payed == 'paid')}
								<a id="href_delete"href='students/download?student_id={$details.student_id}' 
								class="btn btn-success" title="download invoice"> 
									<i class="icon icon-download"></i>
								</a>
							{/if}	
						</td>
						</tr>
					{/foreach}
				</table>
			{/if}
		</div>
	</nav>
{/block}