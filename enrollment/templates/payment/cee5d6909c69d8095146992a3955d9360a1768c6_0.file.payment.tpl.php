<?php
/* Smarty version 3.1.30, created on 2016-11-27 01:24:29
  from "/home/temyong/workspace/git/projects/anthony/enrollment/templates/payment/payment.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5839c54dd38ef4_70698897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cee5d6909c69d8095146992a3955d9360a1768c6' => 
    array (
      0 => '/home/temyong/workspace/git/projects/anthony/enrollment/templates/payment/payment.tpl',
      1 => 1480181053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5839c54dd38ef4_70698897 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/css/mystyles.css" />
	</head>

	<body>
		<nav id="searchStudent">
			<div id="container">
				<a href="/templates/cashier/?studentID=<?php echo $_smarty_tpl->tpl_vars['studentID']->value;?>
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
				<a href="/logic/payed.php?paymentID=<?php echo $_smarty_tpl->tpl_vars['payment']->value[0]['payment_id'];?>
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
