<?php /* Smarty version 2.6.30, created on 2016-11-15 18:28:34
         compiled from subjectEdit.tpl */ ?>
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
				<button class="btn btn-success" type="submit"><a href="index.php">return</a></button></br></br>
				<?php if (( ! empty ( $this->_tpl_vars['edit']['error'] ) )): ?>
					<div>
						<?php echo $this->_tpl_vars['edit']['error']; ?>

					</div>
				<?php endif; ?>
				<input type="hidden" name="subject_id" value="<?php echo $this->_tpl_vars['view']['subject_id']; ?>
" />
				<input type="text" name="subject" value="<?php echo $this->_tpl_vars['view']['subject']; ?>
"> First Name<br>
				<input type="text" name="subject_unit" value="<?php echo $this->_tpl_vars['view']['subject_unit']; ?>
"> Last Name<br>
				<input type="submit" name="edit" value="save"> <br>
			</div>
		</nav>		
	</form>
	</body>
</html>	