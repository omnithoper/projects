<?php
/* Smarty version 3.1.30, created on 2016-11-27 04:08:31
  from "/home/temyong/workspace/git/projects/anthony/enrollment/templates/subject/subjectAdd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5839ebbf3741b0_32159591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d3dd93f8ab6adb2da277d58ef6adf5327a6b57c' => 
    array (
      0 => '/home/temyong/workspace/git/projects/anthony/enrollment/templates/subject/subjectAdd.tpl',
      1 => 1480180282,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5839ebbf3741b0_32159591 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<body>
		<head>
		<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/css/mystyles.css" />
		</head>	
		<form method="post">
		<nav id ="searchStudent">
			<div id="container">
				<h1>Add Subject</h1>
				<?php if ((!empty($_smarty_tpl->tpl_vars['result']->value['error']))) {?>
						<div>
							<?php echo $_smarty_tpl->tpl_vars['result']->value['error'];?>

						</div>
				<?php }?>
				<h3 id="input"></h3>
				<input id="subject" type="text" name="subject" onchange="checkInput();" /> Subject<br/>
				<input id="subject_unit" type="text" name="subject_unit" onchange="checkInput();" /> Subject Unit<br/>
				<input class="btn" id="button_save" type="submit" name="save" value="save" value="save" disabled>
				<a style="float:right" href="index.php">(Return)</a>
			</div>
		</nav>	
		</form>
			<?php echo '<script'; ?>
 type='text/javascript' src='../../js/subjectAdd.js'><?php echo '</script'; ?>
>
	</body>
</html><?php }
}
