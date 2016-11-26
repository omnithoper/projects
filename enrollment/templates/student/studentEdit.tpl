<html>
	<head>
		<link type="text/css" rel="stylesheet" href="/enrollment/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/enrollment/css/mystyles.css" />
	</head>
	<body>
		<nav id="searchStudent">
			<div id="container">
				<h1>Edit Student</h1>
					{if (!empty($edit.error))}
					<div>
						{$edit.error}
					</div>
					{/if}
				<form  method ="POST">
					<h3 id="input" ></h3>
					<input type="hidden" name="student_id" value="{$result.student_id}"/>
					<input id ="first_name" type="text" name="first_name" value="{$result.first_name}"
					 onchange="checkInput();"> First Name<br>
					<input id ="last_name" type="text" name="last_name" value="{$result.last_name}"
					onchange="checkInput();"> Last Name<br>
					<input id="button_save" type="submit" name="edit" value="save" disabled>
					<a style="float:right" href="index.php">(Return)</a>
				</form>
			</div>
		</nav>	
		<script type='text/javascript' src='../../js/studentEdit.js'></script>
	</body>
</html>	
