<?php
/* Smarty version 3.1.30, created on 2016-11-26 20:01:22
  from "C:\Users\omnithopter\Documents\projects\enrollment\templates\student\studentAdd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5839ea123e4e00_61240129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92d00d4d86c42d5b51adca7cc79b45de0d4f538c' => 
    array (
      0 => 'C:\\Users\\omnithopter\\Documents\\projects\\enrollment\\templates\\student\\studentAdd.tpl',
      1 => 1480185329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5839ea123e4e00_61240129 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/css/mystyles.css" />
		<?php echo '<script'; ?>
 type='text/javascript' src='/js/studentAdd.js'><?php echo '</script'; ?>
>
	</head>
	<body> 
	<form id="add-student-form" method ="POST">
	<nav id ="searchStudent">
		<div id="container"> 
			<h1>Add Student</h1>
			<?php if ((!empty($_smarty_tpl->tpl_vars['result']->value['error']))) {?>
				<div>
					<?php echo $_smarty_tpl->tpl_vars['result']->value['error'];?>

				</div>
			<?php }?> 
			<h3 id="input"></h3>
			<input id="first_name" type="text" name="first_name" onchange="checkInput();" /> First Name<br/>
			<input id="last_name" type="text" name="last_name" onchange="checkInput();" /> Last Name<br/>
			<input class="btn" id="button_save" type="submit" name="save" value="save" disabled />		
			<a style="float:right" href="index.php">(Return)</a>
		</div>
	</nav>	
	</form>

	</body>
</html>	<?php }
}
