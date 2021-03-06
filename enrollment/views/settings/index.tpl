{extends file='layout/layout.tpl'}

{block name=title}
	View  Settings
{/block}

{block name=head}
		<link type="text/css" rel="stylesheet" href="/css/mystyles.css" />
	
	{/block}
	{block name=body}
		<nav id ="searchStudent">
			<div id="container">
			<form>
				<a style="float:left" href="/">(Return)</a>
			</form>
				<table class="table table-bordered table-condensed table-striped">
					<tr>
						<th>Number Of Allowed Units</th>
						<th>Price/Unit</th>
						<th>Price/labunit</th>
						<th>Price Of Misc</th>
					</tr>
					{foreach from=$result item=details}
						<tr>
						<td align="center">{$details.number_of_allowed_units}</td>
						<td align="center">{$details.price_per_unit}</td>
						<td align="center">{$details.price_per_lab_unit}</td>
						<td	align="center">{$details.price_of_misc}</td>
						</tr>
					{/foreach}
				</table>	
					<br/>
					<br/>
				<table class="table table-bordered table-condensed table-striped">	
					<a class="pull-right btn btn-success" 
					href="/Semester/add">
					<i class="icon-plus"></i></a>
					<tr>
						<th>Semester ID</th>
						<th>Date Start</th>
						<th>Date End</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>

					{foreach from=$semester item=details}	
						{if ($details.date_start < $date && $details.date_end > $date)}
							<tr class="info" >
						{else}
							<tr>
						{/if}
								<td align="center">{$details.semester_id}</td>
								<td align="center">{$details.date_start}</td>
								<td	align="center">{$details.date_end}</td>
								<td style="width: 1px; wrap: nowrap;"><a href='/Semester/edit?semester_id={$details.semester_id}'
								class="btn btn-danger" title="edit Subject"> <i class="icon icon-edit"></i>
								</a></td>
								<td style="width: 1px; wrap: nowrap;"><a href='/Semester/delete?semester_id={$details.semester_id}' 
								class="btn btn-danger" title="Delete Subject"> <i class="icon icon-remove"></i></a></td>
							</tr>
					{/foreach}
				</table>	
			</div>
		</nav>	
	{/block}

