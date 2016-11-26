<?php
/* Smarty version 3.1.30, created on 2016-11-27 04:08:12
  from "/home/temyong/workspace/git/projects/anthony/enrollment/templates/student/view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5839ebac5feb29_28622306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5badcb2b38ee77dd465dcf4f683c961472af54a3' => 
    array (
      0 => '/home/temyong/workspace/git/projects/anthony/enrollment/templates/student/view.tpl',
      1 => 1480179675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5839ebac5feb29_28622306 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<title>Student Records</title>
		<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/css/mystyles.css" />

	</head>
	<body>		
		<nav id ="searchStudent">
			<div id="container">
				<h1>Student Records</h1>
				<form>
					<a style="float:left" href="/">(Return)</a>
					<a style="float:left"  href="/logic/studentPaginated.php">(paginated)</a>
					<a class="pull-right btn btn-success" 
					href="/templates/student/studentAdd.php">
					<i class="icon-plus"></i></a>
				</form>

				<?php if ((empty($_smarty_tpl->tpl_vars['student']->value))) {?>
					<div class="alert alert-info">No students yet</div>
				<?php } else { ?>
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
				<?php }?>
			</div>
		</nav>
	</body>
<html>
<?php }
}
