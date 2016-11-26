<?php
/* Smarty version 3.1.30, created on 2016-11-27 04:11:47
  from "/home/temyong/workspace/git/projects/anthony/enrollment/templates/subject/subjectEdit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5839ec83726753_67480589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e191a69a3092f88aa5b86e72fb5d7cf196e1b2c8' => 
    array (
      0 => '/home/temyong/workspace/git/projects/anthony/enrollment/templates/subject/subjectEdit.tpl',
      1 => 1480190805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5839ec83726753_67480589 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<body>
		<head>
			<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" />
			<link type="text/css" rel="stylesheet" href="/css/mystyles.css" />
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
				onchange="checkInput();">Subject Unit<br>
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
