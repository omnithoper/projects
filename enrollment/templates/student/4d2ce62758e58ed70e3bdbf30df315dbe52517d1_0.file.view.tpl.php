<?php
/* Smarty version 3.1.30, created on 2016-11-24 15:48:33
  from "C:\Users\omnithopter\Documents\projects\enrollment\templates\student\view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58370bd11a8b67_86964024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d2ce62758e58ed70e3bdbf30df315dbe52517d1' => 
    array (
      0 => 'C:\\Users\\omnithopter\\Documents\\projects\\enrollment\\templates\\student\\view.tpl',
      1 => 1480002408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58370bd11a8b67_86964024 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
					<a class="pull-right btn btn-success" 
					href="/enrollment/templates/student/studentAdd.php">
					<i class="icon-plus"></i></a>
				</form>
				<table class="table table-bordered table-condensed table-striped"> 
				<p id="delete"></p>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['student']->value, 'details');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['details']->value) {
?>
						<tr>
						<td align="center"><?php echo $_smarty_tpl->tpl_vars['details']->value['student_id'];?>
</td>
						<td align="center"><?php echo $_smarty_tpl->tpl_vars['details']->value['first_name'];?>
</td>
						<td	align="center"><?php echo $_smarty_tpl->tpl_vars['details']->value['last_name'];?>
</td>
						<td align="center"><?php echo $_smarty_tpl->tpl_vars['details']->value['payed'];?>
</td>
						<td style="width: 1px; wrap: nowrap;"><a href='studentEdit.php?student_id=<?php echo $_smarty_tpl->tpl_vars['details']->value['student_id'];?>
'
						class="btn btn-danger" title="edit Student"> <i class="icon icon-edit"></i>
						</a></td>
						<td style="width: 1px; wrap: nowrap;"><a id="href_delete"href='studentDelete.php?student_id=<?php echo $_smarty_tpl->tpl_vars['details']->value['student_id'];?>
' 
						class="btn btn-danger" title="Delete Student"> <i class="icon icon-remove"></i></a></td>
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
