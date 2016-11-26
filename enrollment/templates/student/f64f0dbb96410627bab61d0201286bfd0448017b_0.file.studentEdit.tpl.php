<?php
/* Smarty version 3.1.30, created on 2016-11-27 04:08:22
  from "/home/temyong/workspace/git/projects/anthony/enrollment/templates/student/studentEdit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5839ebb64a7752_91830043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f64f0dbb96410627bab61d0201286bfd0448017b' => 
    array (
      0 => '/home/temyong/workspace/git/projects/anthony/enrollment/templates/student/studentEdit.tpl',
      1 => 1480190805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5839ebb64a7752_91830043 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/css/mystyles.css" />
	</head>
	<body>
		<nav id="searchStudent">
			<div id="container">
				<h1>Edit Student</h1>
					<?php if ((!empty($_smarty_tpl->tpl_vars['edit']->value['error']))) {?>
					<div>
						<?php echo $_smarty_tpl->tpl_vars['edit']->value['error'];?>

					</div>
					<?php }?>
				<form  method ="POST">
					<h3 id="input" ></h3>
					<input type="hidden" name="student_id" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['student_id'];?>
"/>
					<input id ="first_name" type="text" name="first_name" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['first_name'];?>
"
					 onchange="checkInput();"> First Name<br>
					<input id ="last_name" type="text" name="last_name" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['last_name'];?>
"
					onchange="checkInput();"> Last Name<br>
					<input id="button_save" type="submit" name="edit" value="save" disabled>
					<a style="float:right" href="index.php">(Return)</a>
				</form>
			</div>
		</nav>	
		<?php echo '<script'; ?>
 type='text/javascript' src='../../js/studentEdit.js'><?php echo '</script'; ?>
>
	</body>
</html>	
<?php }
}
