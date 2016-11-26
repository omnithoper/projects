<?php
/* Smarty version 3.1.30, created on 2016-11-27 01:19:26
  from "/home/temyong/workspace/git/projects/anthony/enrollment/templates/setting/view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5839c41e22f515_80366527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e7a167d710d9df12db66cdf0ea10434db20c00c' => 
    array (
      0 => '/home/temyong/workspace/git/projects/anthony/enrollment/templates/setting/view.tpl',
      1 => 1480180740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5839c41e22f515_80366527 (Smarty_Internal_Template $_smarty_tpl) {
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
			</form>
				<table class="table table-bordered table-condensed table-striped">
					<tr>
						<th>Number Of Allowed Units</th>
						<th>Price/Unit</th>
						<th>Price Of Misc</th>
					</tr>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'details');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['details']->value) {
?>
						<tr>
						<td align="center"><?php echo $_smarty_tpl->tpl_vars['details']->value['number_of_allowed_units'];?>
</td>
						<td align="center"><?php echo $_smarty_tpl->tpl_vars['details']->value['price_per_unit'];?>
</td>
						<td	align="center"><?php echo $_smarty_tpl->tpl_vars['details']->value['price_of_misc'];?>
</td>
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
