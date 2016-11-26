<?php
/* Smarty version 3.1.30, created on 2016-11-26 20:02:09
  from "C:\Users\omnithopter\Documents\projects\enrollment\templates\subject\view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5839ea419de3a2_65151435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '732ed9f2ac6ef7501dc6a4cf39e52d47e2efaeeb' => 
    array (
      0 => 'C:\\Users\\omnithopter\\Documents\\projects\\enrollment\\templates\\subject\\view.tpl',
      1 => 1480185330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5839ea419de3a2_65151435 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>	
		<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/css/mystyles.css" />
	</head>
	<body>
		<nav id ="searchStudent">
			<div id="container">
			<form>
				<a style="float:left" href="/">(Return)</a>
				<a class="pull-right btn btn-success"  type="submit"href="subjectAdd.php"><i class="icon icon-plus"></i></a>
			</form>
				<table class="table table-bordered table-condensed table-striped">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subject']->value, 'details');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['details']->value) {
?>
						<tr>
						<td align="center"><?php echo $_smarty_tpl->tpl_vars['details']->value['subject_id'];?>
</td>
						<td align="center"><?php echo $_smarty_tpl->tpl_vars['details']->value['subject'];?>
</td>
						<td	align="center"><?php echo $_smarty_tpl->tpl_vars['details']->value['subject_unit'];?>
</td>
						<td style="width: 1px; wrap: nowrap;"><a href='subjectEdit.php?subject_id=<?php echo $_smarty_tpl->tpl_vars['details']->value['subject_id'];?>
'
						class="btn btn-danger" title="edit Subject"> <i class="icon icon-edit"></i>
						</a></td>
						<td style="width: 1px; wrap: nowrap;"><a href='subjectDelete.php?subject_id=<?php echo $_smarty_tpl->tpl_vars['details']->value['subject_id'];?>
' 
						class="btn btn-danger" title="Delete Subject"> <i class="icon icon-remove"></i></a></td>
						</tr>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</table>
			</div>
		</nav>	
	</body>
<html>

<?php }
}
