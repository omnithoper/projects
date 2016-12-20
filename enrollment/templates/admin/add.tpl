<html>
	<head>
		<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/css/mystyles.css" />
	</head>
	<body> 
	<form  method ="POST">
	<nav id ="searchStudent">
		<div id="container"> 
			<h1>Add User</h1>
			{if (!empty($result.error))}
				<div>
					{$result.error}
				</div>
			{/if} 
			<h3 id="input"></h3>
			<input id="date_start" data-date-format="yyyy-mm-dd" type="text" name="username" " value="{$username}" /> User Name<br/>
			<input id="date_end" data-date-format="yyyy-mm-dd" type="text" name="password" " value="{$password}" /> Password<br/>
			
			<input class="btn" id="button_save" type="submit" name="save" value="save" />		
			<a style="float:right" href="index.php">(Return)</a>
		</div>
	</nav>	
	</form>

	</body>
</html>	