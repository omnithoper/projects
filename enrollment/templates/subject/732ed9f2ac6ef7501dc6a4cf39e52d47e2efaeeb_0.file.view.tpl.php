<?php
/* Smarty version 3.1.30, created on 2016-11-17 14:04:41
  from "C:\Users\omnithopter\Documents\projects\enrollment\templates\subject\view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582db8f984cd57_46478676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '732ed9f2ac6ef7501dc6a4cf39e52d47e2efaeeb' => 
    array (
      0 => 'C:\\Users\\omnithopter\\Documents\\projects\\enrollment\\templates\\subject\\view.tpl',
      1 => 1479391117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582db8f984cd57_46478676 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>	
		<link type="text/css" rel="stylesheet" href="/enrollment/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/enrollment/css/mystyles.css" />
	</head>
	<body>
		<nav id ="searchStudent">
			<div id="container">
			<form>
				<a style="float:left" href="/enrollment">(Return)</a>
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
