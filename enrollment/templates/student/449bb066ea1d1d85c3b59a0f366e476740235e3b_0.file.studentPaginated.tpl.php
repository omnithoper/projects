<?php
/* Smarty version 3.1.30, created on 2016-11-17 13:43:22
  from "C:\Users\omnithopter\Documents\projects\enrollment\templates\student\studentPaginated.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582db3fae33827_40314104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '449bb066ea1d1d85c3b59a0f366e476740235e3b' => 
    array (
      0 => 'C:\\Users\\omnithopter\\Documents\\projects\\enrollment\\templates\\student\\studentPaginated.tpl',
      1 => 1479390201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582db3fae33827_40314104 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<title>Student Records</title>
		<link type="text/css" rel="stylesheet" href="/enrollment/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/enrollment/css/mystyles.css" />
	</head>
	<body>
	<form>	
		<nav id="searchStudent">
			<div id="container">
				<h1>Student Records</h1>
					<a style="float:left" href="/enrollment">(Return)</a>
					<a class="pull-right btn btn-success" href="/enrollment/templates/student/studentAdd.php">
					<i class="icon-plus"></i></a></br>
					<p><a href='../../enrollment/templates/student/'>View All</a> | <b>View Page:</b>
						<?php
$_smarty_tpl->tpl_vars['show_page'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['show_page']->step = 1;$_smarty_tpl->tpl_vars['show_page']->total = (int) min(ceil(($_smarty_tpl->tpl_vars['show_page']->step > 0 ? $_smarty_tpl->tpl_vars['show_page']->value <= $_smarty_tpl->tpl_vars['total_pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['show_page']->value <= $_smarty_tpl->tpl_vars['total_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['show_page']->step)),$_smarty_tpl->tpl_vars['show_page']->value++);
if ($_smarty_tpl->tpl_vars['show_page']->total > 0) {
for ($_smarty_tpl->tpl_vars['show_page']->value = 1, $_smarty_tpl->tpl_vars['show_page']->iteration = 1;$_smarty_tpl->tpl_vars['show_page']->iteration <= $_smarty_tpl->tpl_vars['show_page']->total;$_smarty_tpl->tpl_vars['show_page']->value += $_smarty_tpl->tpl_vars['show_page']->step, $_smarty_tpl->tpl_vars['show_page']->iteration++) {
$_smarty_tpl->tpl_vars['show_page']->first = $_smarty_tpl->tpl_vars['show_page']->iteration == 1;$_smarty_tpl->tpl_vars['show_page']->last = $_smarty_tpl->tpl_vars['show_page']->iteration == $_smarty_tpl->tpl_vars['show_page']->total;?>
								<a href='studentPaginated.php?page="<?php echo $_smarty_tpl->tpl_vars['show_page']->value;?>
"'><?php echo $_smarty_tpl->tpl_vars['show_page']->value;?>
</a> 		
						<?php }
}
?>
	
					</p>	
						<table class="table table-bordered table-condensed table-striped"> 
						<tr> <th>ID</th> <th>First Name</th> <th>Last Name</th> <th></th> <th></th></tr>
						<?php
$_smarty_tpl->tpl_vars['show_page'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['show_page']->step = 1;$_smarty_tpl->tpl_vars['show_page']->total = (int) min(ceil(($_smarty_tpl->tpl_vars['show_page']->step > 0 ? $_smarty_tpl->tpl_vars['show_page']->value < $_smarty_tpl->tpl_vars['end']->value+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-($_smarty_tpl->tpl_vars['show_page']->value < $_smarty_tpl->tpl_vars['end']->value)+1)/abs($_smarty_tpl->tpl_vars['show_page']->step)),$_smarty_tpl->tpl_vars['show_page']->value++);
if ($_smarty_tpl->tpl_vars['show_page']->total > 0) {
for ($_smarty_tpl->tpl_vars['show_page']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['show_page']->iteration = 1;$_smarty_tpl->tpl_vars['show_page']->iteration <= $_smarty_tpl->tpl_vars['show_page']->total;$_smarty_tpl->tpl_vars['show_page']->value += $_smarty_tpl->tpl_vars['show_page']->step, $_smarty_tpl->tpl_vars['show_page']->iteration++) {
$_smarty_tpl->tpl_vars['show_page']->first = $_smarty_tpl->tpl_vars['show_page']->iteration == 1;$_smarty_tpl->tpl_vars['show_page']->last = $_smarty_tpl->tpl_vars['show_page']->iteration == $_smarty_tpl->tpl_vars['show_page']->total;?>
							<?php if (($_smarty_tpl->tpl_vars['show_page']->value == $_smarty_tpl->tpl_vars['total_results']->value)) {?>  
								<?php break 1;?>
							<?php }?>

							<?php ob_start();
echo $_smarty_tpl->tpl_vars['show_page']->value;
$_prefixVariable1=ob_get_clean();
echo $_smarty_tpl->tpl_vars['result']->value->data_seek($_prefixVariable1);?>

							<?php $_smarty_tpl->_assignInScope('row', $_smarty_tpl->tpl_vars['result']->value->fetch_row());
?>
						
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value[0];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value[4];?>
 </td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value[5];?>
</td>
							<td><a href='../../enrollment/templates/student/studentEdit.php?student_id="<?php echo $_smarty_tpl->tpl_vars['row']->value[0];?>
"'>
							Edit</a></td>
							<td><a href='../../enrollment/templates/student/studentDelete.php?student_id="<?php echo $_smarty_tpl->tpl_vars['row']->value[0];?>
"'>
							Delete</a></td>
						</tr>
						<?php }
}
?>

					</table>
			</div>
		</nav>		
	</form>
	</body>
</html><?php }
}
