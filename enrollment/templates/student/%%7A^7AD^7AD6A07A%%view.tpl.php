<?php /* Smarty version 2.6.30, created on 2016-11-16 13:21:47
         compiled from view.tpl */ ?>
<html>
	<head>
		<title>Student Records</title>
		<link type="text/css" rel="stylesheet" href="/enrollment/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/enrollment/css/mystyles.css" />
	</head>
	<body>		
		<nav id ="searchStudent">
			<div id="container">
				<h1>Student Records</h1>
				<form>
					<a style="float:left" href="/enrollment">(Return)</a>
					<a style="float:left"  href="/enrollment/logic/studentPaginated.php">(paginated)</a>
					<a class="pull-right btn btn-success" href="/enrollment/templates/student/studentAdd.php">
					<i class="icon-plus"></i></a>
				</form>
				<table class="table table-bordered table-condensed table-striped"> 
					<?php $_from = $this->_tpl_vars['student']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['details']):
?>
						<tr>
						<td align="center"><?php echo $this->_tpl_vars['details']['student_id']; ?>
</td>
						<td align="center"><?php echo $this->_tpl_vars['details']['first_name']; ?>
</td>
						<td	align="center"><?php echo $this->_tpl_vars['details']['last_name']; ?>
</td>
						<td style="width: 1px; wrap: nowrap;"><a href='studentEdit.php?student_id=<?php echo $this->_tpl_vars['details']['student_id']; ?>
'
						class="btn btn-danger" title="edit Student"> <i class="icon icon-edit"></i>
						</a></td>
						<td style="width: 1px; wrap: nowrap;"><a href='studentDelete.php?student_id=<?php echo $this->_tpl_vars['details']['student_id']; ?>
' 
						class="btn btn-danger" title="Delete Student"> <i class="icon icon-remove"></i></a></td>
						</tr>
					<?php endforeach; endif; unset($_from); ?>
				</table>
			</div>
		</nav>
	</body>
<html>