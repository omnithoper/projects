<?php
/* Smarty version 3.1.30, created on 2016-11-27 01:13:24
  from "/home/temyong/workspace/git/projects/anthony/enrollment/templates/studentSubject/student_enroly.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5839c2b4dc46f2_48817871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15d1af04d85d3ef1f0cbc456ebd8f05e5e848643' => 
    array (
      0 => '/home/temyong/workspace/git/projects/anthony/enrollment/templates/studentSubject/student_enroly.tpl',
      1 => 1480180399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5839c2b4dc46f2_48817871 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/css/mystyles.css" />
		<?php echo '<script'; ?>
 type='text/javascript' src='/js/student_enroly.js'><?php echo '</script'; ?>
>

	</head>

	<body>
		<nav id="searchStudent">
			<div id="container">
				<form action="/templates/studentSubject/" Method="POST">
					<h1>Student Name</h1>
					Name:<input type="text" name="studentName">
					<input type="submit" name="search" value="search"/>
					<a  class="pull-right" href="/">(return)</a></br>	
					<?php if ((!empty($_smarty_tpl->tpl_vars['students']->value[1]) && empty($_smarty_tpl->tpl_vars['selectedStudent']->value))) {?>
						<ul>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['students']->value, 'student');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['student']->value) {
?>
								<li>
									<?php echo $_smarty_tpl->tpl_vars['student']->value['last_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['student']->value['first_name'];?>

									(<a type="submit" href="/templates/studentSubject/?studentID=<?php echo $_smarty_tpl->tpl_vars['student']->value['student_id'];?>
&test=test">select</a>)
								</li>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</ul>
					<?php }?>
				</form>

				<form method="post">
						<?php if ((!empty($_smarty_tpl->tpl_vars['selectedStudent']->value))) {?>
							SELECTED NAME:. <?php echo $_smarty_tpl->tpl_vars['selectedStudent']->value['full_name'];?>
</br>
							<br />
							<h1>Enroll to Subject</h1>
							<input type="hidden" name="studentID" value="<?php echo $_smarty_tpl->tpl_vars['studentID']->value;?>
" />
							<select id="subject_list" name="getSubjectID" onchange="checkSubjectName();">	
								<option value="">(Select Subject)</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subject']->value, 'subjects');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subjects']->value) {
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['subjects']->value['subject_id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['subjects']->value['subject'];?>
</option>	
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	
							</select>	
							<button id="button_save" type="submit" name="saveSubject" value="saveSubject" disabled>Save</button></br>
						<?php }?>
						
						<?php if ((!empty($_smarty_tpl->tpl_vars['selectedStudent']->value) && !empty($_smarty_tpl->tpl_vars['allSubject']->value))) {?>
							<h1>Student Enroll Subjects</br></h1>
							<br />
							<?php if ((!empty($_smarty_tpl->tpl_vars['error']->value['message']))) {?>
								<div class="alert alert-danger">
								<?php echo $_smarty_tpl->tpl_vars['error']->value['message'];?>

								<?php echo $_smarty_tpl->tpl_vars['error']->value['status'];?>

								</div>
							<?php }?> 
							<table class="table table-bordered table-condensed table-striped"> 
								<tr>
									<th>Subject ID</th>
									<th>Subject</th>
									<th>Subject UNIT</th>
									<th style="width: 1px; white-space: nowrap;">&nbsp;</th>
								</tr>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allSubject']->value, 'subject');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subject']->value) {
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['subject']->value['subject_id'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['subject']->value['subject'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['subject']->value['subject_unit'];?>
</td>
										<td style="width: 1px; wrap: nowrap;">
											<a href="/templates/studentSubject/?subjectID=<?php echo $_smarty_tpl->tpl_vars['subject']->value['subject_id'];?>

										&studentID=<?php echo $_smarty_tpl->tpl_vars['subject']->value['student_id'];?>
&action=delete" class="btn btn-danger" title="Delete Subject"><i class="icon icon-remove"></i></a>
										</td>
									</tr>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								<tr>
									<td colspan="2"><span class="pull-right">Total Units</span></td>
									<td colspan="2">
										<label for="Total"><?php echo $_smarty_tpl->tpl_vars['totalUnit']->value;?>
</label>
									</td>
								</tr>
							</table>
							<a href="/templates/cashier/?studentID=<?php echo $_smarty_tpl->tpl_vars['studentID']->value;?>
&
							studentName=<?php echo $_smarty_tpl->tpl_vars['selectedStudent']->value['full_name'];?>
" class="btn btn-success pull-right"  title="payment">pay</a>
							<div class="clearfix"></div>
						<?php }?>
		
				</form>
				<footer>
					<center>
						copyright &copy Busasal.com
					</center>
				</footer>	
			</div>		
		</nav>
	</body>	
</html>	
<?php }
}
