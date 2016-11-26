<html>
	<body>
		<head>
			<link type="text/css" rel="stylesheet" href="/enrollment/css/bootstrap.min.css" />
			<link type="text/css" rel="stylesheet" href="/enrollment/css/mystyles.css" />
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
				<input type="hidden" name="subject_id" value="{$view.subject_id}" />
				<input id="subject" type="text" name="subject" value="{$view.subject}" 
				onchange="checkInput();">Subject<br>
				<input id="subject_unit" type="text" name="subject_unit" value="{$view.subject_unit}"
				onchange="checkInput();"> Subject Unit<br>
				<input id="button_save" type="submit" name="edit" value="save" disabled>
				<a style="float:right" href="index.php">(Return)</a>
			</div>
		</nav>		
	</form>
		<script type='text/javascript' src='../../js/subjectEdit.js'></script>
	</body>
</html>	