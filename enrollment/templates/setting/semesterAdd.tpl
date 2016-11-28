<html>
	<head>
		<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/css/mystyles.css" />
		<script type='text/javascript' src='/js/semesterAdd.js'></script>
	</head>
	<body> 
	<form id="add-student-form" method ="POST">
	<nav id ="searchStudent">
		<div id="container"> 
			<h1>Add Semester</h1>
			{if (!empty($result.error))}
				<div>
					{$result.error}
				</div>
			{/if} 
			<h3 id="input"></h3>
			<input id="date_start" type="text" name="date_start" onchange="checkInput();" /> Date Start<br/>
			<input id="date_end" type="text" name="date_end" onchange="checkInput();" /> Date End<br/>
			<input class="btn" id="button_save" type="submit" name="save" value="save" disabled />		
			<a style="float:right" href="index.php">(Return)</a>
		</div>
	</nav>	
	</form>

	</body>
</html>	