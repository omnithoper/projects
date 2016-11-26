<?php
/* Smarty version 3.1.30, created on 2016-11-17 14:05:17
  from "C:\Users\omnithopter\Documents\projects\enrollment\templates\subject\subjectEdit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582db91dc4e066_97932697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4421b1aad252382d6c01b6df9cfcaaaee4f9c8db' => 
    array (
      0 => 'C:\\Users\\omnithopter\\Documents\\projects\\enrollment\\templates\\subject\\subjectEdit.tpl',
      1 => 1479391512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582db91dc4e066_97932697 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<body>
		<head>
			<link type="text/css" rel="stylesheet" href="/enrollment/css/bootstrap.min.css" />
			<link type="text/css" rel="stylesheet" href="/enrollment/css/mystyles.css" />
		</head>	
	<form  method ="POST">
		<nav id="searchStudent">
			<div id="container">
				<h1>Edit Subject</h1>
				<?php if ((!empty($_smarty_tpl->tpl_vars['edit']->value['error']))) {?>
					<div>
						<?php echo $_smarty_tpl->tpl_vars['edit']->value['error'];?>

					</div>
				<?php }?>
				<h3 id="input"></h3> 
				<input type="hidden" name="subject_id" value="<?php echo $_smarty_tpl->tpl_vars['view']->value['subject_id'];?>
" />
				<input id="subject" type="text" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['view']->value['subject'];?>
" 
				onchange="checkInput();">Subject<br>
				<input id="subject_unit" type="text" name="subject_unit" value="<?php echo $_smarty_tpl->tpl_vars['view']->value['subject_unit'];?>
"
				onchange="checkInput();"> Subject Unit<br>
				<input id="button_save" type="submit" name="edit" value="save" disabled>
				<a style="float:right" href="index.php">(Return)</a>
			</div>
		</nav>		
	</form>
		<?php echo '<script'; ?>
 type='text/javascript' src='../../js/subjectEdit.js'><?php echo '</script'; ?>
>
	</body>
</html>	<?php }
}
