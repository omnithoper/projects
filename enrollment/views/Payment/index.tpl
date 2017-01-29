<html>
	<head>
		<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/css/mystyles.css" />
	</head>

	<body>
		<nav id="searchStudent">
			<div id="container">
				<a href="/Cashier/?studentID={$studentID}" class="pull-right"  title="payment">(return)</a>
							<div class="clearfix"></div>
			<form>
			<label>Student Name= {$studentName.full_name}</label>
			<label>invoice # = {$payment[0].payment_id}</label>
			<label>amount paid={$cash}</label>	
			<label>change = {$payment[0].change}</label>
			<label>transaction date= {$payment[0].transaction_date}</label>
				<a href="/Payment/payed?paymentID={$payment[0].payment_id}" 
				class="btn btn-success pull-right" title="payment">payed</a>
			<div class="clearfix"></div>
			</form>
			</div>		
		</nav>
	</body>
</html>	
