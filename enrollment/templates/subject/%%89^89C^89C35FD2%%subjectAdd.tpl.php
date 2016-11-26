<?php /* Smarty version 2.6.30, created on 2016-11-14 17:22:43
         compiled from subjectAdd.tpl */ ?>
<html>
	<body>
		<head>
		<link type="text/css" rel="stylesheet" href="/enrollment/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/enrollment/css/mystyles.css" />
		</head>	
		<form method="post">
		<nav id ="searchStudent">
			<div id="container">
				<h1>Add Subject</h1>
				<?php if (( ! empty ( $this->_tpl_vars['result']['error'] ) )): ?>
						<div>
							<?php echo $this->_tpl_vars['result']['error']; ?>

						</div>
				<?php endif; ?>
				<h3 id="input"></h3>
				<input id="subject" type="text" name="subject" onchange="checkInput();" /> Subject<br/>
				<input id="subject_unit" type="text" name="subject_unit" onchange="checkInput();"/> Subject Unit<br/>
				<input class="btn" id="button_save" type="submit" name="save" value="save" value="save" disabled>
				<a style="float:right" href="index.php">(Return)</a>
			</div>
		</nav>	
		</form>
			<script type='text/javascript' src='../../js/subjectAdd.js'></script>
	</body>
</html>