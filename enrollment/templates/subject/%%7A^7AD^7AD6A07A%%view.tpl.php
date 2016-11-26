<?php /* Smarty version 2.6.30, created on 2016-11-14 11:51:29
         compiled from view.tpl */ ?>
<html>
	<head>	
		<link type="text/css" rel="stylesheet" href="/enrollment/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/enrollment/css/mystyles.css" />
	</head>
	<body>
		<nav id ="searchStudent">
			<div id="container">
			<form>
				<button class="btn btn-success" type="submit"><a href="/enrollment">Return</a></button>
				<a class="pull-right btn btn-success"  type="submit"href="subjectAdd.php"><i class="icon icon-plus"></i></a>
			</form>
				<table class="table table-bordered table-condensed table-striped">
					<?php $_from = $this->_tpl_vars['subject']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['details']):
?>
						<tr>
						<td align="center"><?php echo $this->_tpl_vars['details']['subject_id']; ?>
</td>
						<td align="center"><?php echo $this->_tpl_vars['details']['subject']; ?>
</td>
						<td	align="center"><?php echo $this->_tpl_vars['details']['subject_unit']; ?>
</td>
						<td style="width: 1px; wrap: nowrap;"><a href='subjectEdit.php?subject_id=<?php echo $this->_tpl_vars['details']['subject_id']; ?>
'
						class="btn btn-danger" title="edit Subject"> <i class="icon icon-edit"></i>
						</a></td>
						<td style="width: 1px; wrap: nowrap;"><a href='subjectDelete.php?subject_id=<?php echo $this->_tpl_vars['details']['subject_id']; ?>
' 
						class="btn btn-danger" title="Delete Subject"> <i class="icon icon-remove"></i></a></td>
						</tr>
					<?php endforeach; endif; unset($_from); ?>
				</table>
			</div>
		</nav>	
	</body>
<html>
