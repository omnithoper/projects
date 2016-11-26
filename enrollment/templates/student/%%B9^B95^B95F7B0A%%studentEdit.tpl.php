<?php /* Smarty version 2.6.30, created on 2016-11-15 20:11:45
         compiled from studentEdit.tpl */ ?>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="/enrollment/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/enrollment/css/mystyles.css" />
	</head>
	<body>
		<nav id="searchStudent">
			<div id="container">
				<h1>Edit Student</h1>
					<button class="btn btn-success" type="submit"><a href="index.php">return</a></button></br></br>
					<?php if (( ! empty ( $this->_tpl_vars['edit']['error'] ) )): ?>
					<div>
						<?php echo $this->_tpl_vars['edit']['error']; ?>

					</div>
					<?php endif; ?>
				<form  method ="POST">
					<h3 id="input" ></h3>
					<input type="hidden" name="student_id" value="<?php echo $this->_tpl_vars['result']['student_id']; ?>
"/>
					<input id ="first_name" type="text" name="first_name" value="<?php echo $this->_tpl_vars['result']['first_name']; ?>
"
					 onchange="checkInput();"> First Name<br>
					<input id ="last_name" type="text" name="last_name" value="<?php echo $this->_tpl_vars['result']['last_name']; ?>
"
					onchange="checkInput();"> Last Name<br>
					<input id="button_save" type="submit" name="edit" value="save" disabled> <br>
				</form>
			</div>
		</nav>	
		<script type='text/javascript' src='../../js/studentEdit.js'></script>
	</body>
</html>	