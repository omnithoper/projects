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
			</div>
		</nav>	
	</body>
<html>

