<html>
	<body>
		<head>
			<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" />
			<link type="text/css" rel="stylesheet" href="/css/mystyles.css" />
				<script type='text/javascript' src='../../js/semesterEdit.js'></script>
		</head>	
	<form  method ="POST">
		<nav id="searchStudent">
			<div id="container">
				<h1>Edit Subject</h1>
				{if (!empty($edit.error))}
					<div>
						{$edit.error}
					</div>
				{/if}
				<h3 id="input"></h3> 
				<input type="hidden" name="semester_id" value="{$view[0].semester_id}" />
				<input id="date_start" type="text" name="date_start" value="{$view[0].date_start}" 
				onchange="checkInput();">Subject<br>
				<input id="date_end" type="text" name="date_end" value="{$view[0].date_end}"
				onchange="checkInput();">Subject Unit<br>
				<input id="button_save" type="submit" name="edit" value="save" disabled>
				<a style="float:right" href="index.php">(Return)</a>
			</div>
		</nav>		
	</form>

	</body>
</html>	