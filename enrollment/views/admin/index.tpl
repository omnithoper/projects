{extends file='layout/layout.tpl'}

{block name=head}
		<link type="text/css" rel="stylesheet" href="/css/mystyles.css" />
	
	{/block}
	{block name="body"}
		<nav id ="searchStudent">
			<div id="container">
			<form>
				<a style="float:left" href="/">(Return)</a>
			</form>
				<table class="table table-bordered table-condensed table-striped">
					<a class="pull-right btn btn-success" 
					href="/Admin/add">
					<i class="icon-plus"></i></a>
					<tr>
						<th>User_id</th>
						<th>User Name</th>
						<th>Password</th>
					</tr>
					{foreach from=$result item=details}
						<tr>
						<td align="center">{$details.user_id}</td>
						<td align="center">{$details.username}</td>
						<td align="center">{$details.password}</td>
						<td style="width: 1px; wrap: nowrap;"><a href='/Admin/edit?user_id={$details.user_id}'
						class="btn btn-success" title="Edit User"> <i class="icon icon-edit"></i>
						</a></td>
						<td style="width: 1px; wrap: nowrap;"><a href='/Admin/delete?user_id={$details.user_id}' 
						class="btn btn-danger" title="Delete User"> <i class="icon icon-remove"></i></a></td>
						</tr>
					{/foreach}
				</table>	
			</div>
		</nav>	
	{/block}

