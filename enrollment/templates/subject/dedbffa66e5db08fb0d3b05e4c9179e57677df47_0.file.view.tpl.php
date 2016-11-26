<?php
/* Smarty version 3.1.30, created on 2016-11-27 01:10:55
  from "/home/temyong/workspace/git/projects/anthony/enrollment/templates/subject/view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5839c21f826573_27888735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dedbffa66e5db08fb0d3b05e4c9179e57677df47' => 
    array (
      0 => '/home/temyong/workspace/git/projects/anthony/enrollment/templates/subject/view.tpl',
      1 => 1480180154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5839c21f826573_27888735 (Smarty_Internal_Template $_smarty_tpl) {
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
