<?php /* Smarty version 2.6.30, created on 2016-11-15 15:34:50
         compiled from studentAdd.tpl */ ?>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="/enrollment/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/enrollment/css/mystyles.css" />
		
	</head>
	<body> 
	<form id="add-student-form" method ="POST">
	<nav id ="searchStudent">
		<div id="container"> 
			<h1>Add Student</h1>
			<?php if (( ! empty ( $this->_tpl_vars['result']['error'] ) )): ?>
				<div>
					<?php echo $this->_tpl_vars['result']['error']; ?>

				</div>
			<?php endif; ?> 
				<h3 id="input" ></h3>

			<input id="first_name" type="text" name="first_name" onchange="checkInput();"> First Name<br>
			<input id="last_name" type="text" name="last_name" onchange="checkInput();"> Last Name<br>
			<input id="button_save" class="btn" type="submit" name="save" value="save" disabled>
			<a style="float:right" href="index.php">(Return)</a>
		</div>
	</nav>	
	</form>
	<script type='text/javascript' src='../../js/studentAdd.js'></script>
	</body>
</html>	