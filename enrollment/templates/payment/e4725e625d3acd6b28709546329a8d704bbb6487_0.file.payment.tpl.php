<?php
/* Smarty version 3.1.30, created on 2016-11-24 12:37:25
  from "C:\Users\omnithopter\Documents\projects\enrollment\templates\payment\payment.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5836df05407742_69136774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4725e625d3acd6b28709546329a8d704bbb6487' => 
    array (
      0 => 'C:\\Users\\omnithopter\\Documents\\projects\\enrollment\\templates\\payment\\payment.tpl',
      1 => 1479990679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5836df05407742_69136774 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="/enrollment/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/enrollment/css/mystyles.css" />
	</head>

	<body>
		<nav id="searchStudent">
			<div id="container">
				<a href="/enrollment/templates/cashier/?studentID=<?php echo $_smarty_tpl->tpl_vars['studentID']->value;?>
" class="pull-right"  title="payment">(return)</a>
							<div class="clearfix"></div>
			<form>
			<label>Student Name= <?php echo $_smarty_tpl->tpl_vars['studentName']->value['full_name'];?>
</label>
			<label>invoice # = <?php echo $_smarty_tpl->tpl_vars['payment']->value[0]['payment_id'];?>
</label>
			<label>amount paid=<?php echo $_smarty_tpl->tpl_vars['cash']->value;?>
</label>	
			<label>change = <?php echo $_smarty_tpl->tpl_vars['payment']->value[0]['change'];?>
</label>
			<label>transaction date= <?php echo $_smarty_tpl->tpl_vars['payment']->value[0]['transaction_date'];?>
</label>
				<a href="/enrollment/logic/payed.php?paymentID=<?php echo $_smarty_tpl->tpl_vars['payment']->value[0]['payment_id'];?>
" 
				class="btn btn-success pull-right" title="payment">payed</a>
			<div class="clearfix"></div>
			</form>
			</div>		
		</nav>
	</body>
</html>	
<?php }
}
