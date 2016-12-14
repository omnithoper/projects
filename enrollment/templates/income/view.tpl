<html>
	<head>
		<title>Semester Records</title>
		<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/css/mystyles.css" />

	</head>
	<body>		
		<form method ="post">
			<nav id ="searchStudent">
				<div id="container">
					<h1>Semester Income</h1>

						<a style="float:left" href="/">(Return)</a>
					{if (empty($result))}
						<div class="alert alert-info">No students yet</div>
					{else}
						<table class="table table-bordered table-condensed table-striped"> 
							<p id="delete"></p>
								<tr>
									<th>Studend Name</th>
									<th>Total Paid</th>
									<th>Change</th>
									<th>Total Income</th>
									<th>Date Paid</th>
									<th>Semeser Date</th>
								</tr>	
							{foreach from=$result item=details}
								<tr>
									<td align="center">{$details.fullName}</td>
									<td align="center">{$details.total_amount}</td>
									<td align="center">{$details.change}</td>
									<td align="center">{$details.paid}</td>
									<td	align="center">{$details.transaction_date}</td>
						
						
							{/foreach}
										<td>
										<select name = "semDate" >
											<option >(Select Semester)</option>
										{foreach from=$semesterDate item=details}	
											<option value="{$details.date_start}, {$details.date_end}">{$details.date_start} to {$details.date_end} </option>
										{/foreach}	
										</select>
									</td>
									<td><button type="submit" name="saveSemDate" >Go</button>	</td>
								</tr>
								<tr>
								<td colspan="1"><span class="pull-right">Price</span></td>
								<td> <label for="Price">{$totalAmount}</label> </td>
								<td> <label for="Price">{$change}</label> </td>
								<td> <label for="Price">{$totalPaid}</label> </td>
								<td colspan="3"></td>
							</tr>
						</table> <br/> <br/>
					{/if}
				</div>
			</nav>
		</form>	
	</body>
<html>
