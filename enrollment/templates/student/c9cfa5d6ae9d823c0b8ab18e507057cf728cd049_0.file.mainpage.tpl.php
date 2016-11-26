<?php
/* Smarty version 3.1.30, created on 2016-11-27 00:13:10
  from "/home/temyong/workspace/git/projects/anthony/enrollment/templates/student/mainpage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5839b4967c20e3_15980952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9cfa5d6ae9d823c0b8ab18e507057cf728cd049' => 
    array (
      0 => '/home/temyong/workspace/git/projects/anthony/enrollment/templates/student/mainpage.tpl',
      1 => 1480176770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5839b4967c20e3_15980952 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<body>
		<head>
		<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/css/mystyles.css" />
		
		</head>
			<form>
				<div id="container"> 
					<table class="table table-bordered table-condensed table-striped"> 
						<tr><td><a href="/templates/student/" class="btn btn-block">View students</a></td></tr>
						<tr><td><a href="/templates/subject/" class="btn btn-block">View subjects</a></td></tr>
						<tr><td><a href="/templates/studentSubject/" class="btn btn-block">Enroll</a></td></tr>
						<tr><td><a href="/templates/setting/" class="btn btn-block">Setting</a></td></tr>
					</table>
				</div>
			</form>
	</body>
<html> 
<?php }
}
