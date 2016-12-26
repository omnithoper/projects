<html>
	<head>
		<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/css/mystyles.css" />
		<script type='text/javascript' src='/js/cashier.js'></script>

	</head>

	<body>
		<nav id="searchStudent">
			<div id="container">
				<form  action="/Payment/" method="post">		
					<h1>Student Name: {$studentName}</h1>	
				<a href="/StudentsSubjects/">(return)</a></br>	
				<a href="/">(Main Menu)</a></br>	
					<table class="table table-bordered table-condensed table-striped"> 
						<tr>
							<th>Subject ID</th>
							<th>Subject</th>
							<th>lecUnit</th>
							<th>labUnit</th>
							<th>Subject UNIT</th>
						</tr>
						{foreach from=$allSubject item=subject}
							<tr>
								<td>{$subject.subject_id}</td>
								<td>{$subject.subject}</td>
								<td>{$subject.lec_unit}</td>
								<td>{$subject.lab_unit}</td>
								<td>{$subject.subject_unit}</td>
							</tr>
						{/foreach}
						<tr>
							<td colspan="2"><span class="pull-right">Total Units</span></td>
							<td> <label for="Total">{$totalLecUnit}</label>	</td>
							<td> <label for="Total">{$totalLabUnit}</label>	</td>
							<td > <label for="Total">{$totalUnit}</label>	</td>
						</tr>
						<tr>
							<td colspan="2"><span class="pull-right">Price</span></td>
							<td> <label for="Price">{$totalLecUnitPrice}</label> </td>
							<td> <label for="Price">{$totalLabUnitPrice}</label> </td>
							<td> <label for="Price">{$totalUnitPrice}</label> </td>
						</tr>
						<tr>
							<td colspan="4"><span class="pull-right">Miscellaneous</span></td>
							<td>
								<label for="Price">{$priceMisc}</label>	
							</td>
						</tr>
						<tr>
							<td colspan="4"><span class="pull-right">Total</span></td>
							<td colspan="4">
								<input id="amount" name="totalPrice" type="hidden" value="{$totalPrice}"/>
								<input id="student_id" name="studentID" type="hidden" value="{$studentID}"/>
								<label for="Price">{$totalPrice}</label>	
							</td>
						</tr>
						<tr>
							<td colspan="4"><span class="pull-right">Cash</span></td>
							<td>
								<input id="cash" name="cash" type="text" onblur="computeChange()" onchange="checkPayment();" />
							</td>
						</tr>
						<tr id="change_display">
							<td colspan="4"><span class="pull-right">Change</span></td>
							<td>
								<input id="change" name="change" type="text"  />
							</td>
						</tr>
					</table>		
					<button id="button_save" type="submit" class="btn btn-success pull-right" disabled >pay</button>
					<div class="clearfix"></div>
				</form>
			</div>		
		</nav>
	</body>
</html>	
