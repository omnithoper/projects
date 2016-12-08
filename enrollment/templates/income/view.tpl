<html>
	<head>
		<title>Student Records</title>
		<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/css/mystyles.css" />

	</head>
	<body>		
		<nav id ="searchStudent">
			<div id="container">
				<h1>Semester Income</h1>
				<form>
					<a style="float:left" href="/">(Return)</a>
				</form>

				{if (empty($result))}
					<div class="alert alert-info">No students yet</div>
				{else}
					<table class="table table-bordered table-condensed table-striped"> 
						<p id="delete"></p>
							<tr>
								<th>Studend ID</th>
								<th>Total Paid</th>
								<th>Change</th>
								<th>Total Income</th>
								<th>Date Paid</th>
							</tr>	
						{foreach from=$result item=details}
							<tr>
								<td align="center">{$details.student_id}</td>
								<td align="center">{$details.total_amount}</td>
								<td align="center">{$details.change}</td>
								<td align="center">{$details.paid}</td>
								<td	align="center">{$details.transaction_date}</td>
							</tr>
					
						{/foreach}
							<tr>
							<td colspan="1"><span class="pull-right">Price</span></td>
							<td> <label for="Price">{$totalAmount}</label> </td>
							<td> <label for="Price">{$change}</label> </td>
							<td> <label for="Price">{$totalPaid}</label> </td>
						</tr>
					</table>
				{/if}
			</div>
		</nav>
	</body>
<html>
