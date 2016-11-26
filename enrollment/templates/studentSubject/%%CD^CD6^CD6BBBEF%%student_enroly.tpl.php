<?php /* Smarty version 2.6.30, created on 2016-11-16 15:16:58
         compiled from student_enroly.tpl */ ?>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="/enrollment/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/enrollment/css/mystyles.css" />

	</head>

	<body>
		<nav id="searchStudent">
			<div id="container">
				<form action="/enrollment/templates/studentSubject/" Method="POST">
					<h1>Student Name</h1>
					Name:<input type="text" name="studentName">
					<input type="submit" name="search" value="search">
					<button type="submit"><a href="/enrollment/">Back</a></button></br>	
					<?php if (( ! empty ( $this->_tpl_vars['students'][1] ) && empty ( $this->_tpl_vars['selectedStudent'] ) )): ?>
						<ul>
							<?php $_from = $this->_tpl_vars['students']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['student']):
?>
								<li>
									<?php echo $this->_tpl_vars['student']['last_name']; ?>
 <?php echo $this->_tpl_vars['student']['first_name']; ?>

									<button type="submit">
									(<a href="/enrollment/templates/studentSubject/?studentID=<?php echo $this->_tpl_vars['student']['student_id']; ?>
&test=test">select</a>)
									</button>
								</li>
							<?php endforeach; endif; unset($_from); ?>
						</ul>
					<?php endif; ?>
				</form>
				<form method="post">
					<div id="content" >
						<?php if (( ! empty ( $this->_tpl_vars['selectedStudent'] ) )): ?>
							SELECTED NAME:. <?php echo $this->_tpl_vars['selectedStudent']['full_name']; ?>
</br>
							<br />
							<h1>Enroll to Subject</h1>
							<input type="hidden" name="studentID" value="<?php echo $this->_tpl_vars['studentID']; ?>
" />
							<select name="getSubjectID">			
								<?php $_from = $this->_tpl_vars['subject']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subjects']):
?>
									<option value="<?php echo $this->_tpl_vars['subjects']['subject_id']; ?>
"> <?php echo $this->_tpl_vars['subjects']['subject']; ?>
</option>	
								<?php endforeach; endif; unset($_from); ?>	
							</select>	
							
							<button type="submit" name="saveSubject" value="saveSubject">
								Save
							</button></br>
						<?php endif; ?>
						
						<?php if (( ! empty ( $this->_tpl_vars['selectedStudent'] ) && ! empty ( $this->_tpl_vars['allSubject'] ) )): ?>
							<h1>Student Enroll Subjects</br><h1>
							<br />
							<table class="table table-bordered table-condensed table-striped"> 
								<tr>
									<th>Subject ID</th>
									<th>Subject</th>
									<th>Subject UNIT</th>
									<th style="width: 1px; white-space: nowrap;">&nbsp;</th>
								</tr>
								<?php $_from = $this->_tpl_vars['allSubject']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subject']):
?>
									<?php $this->assign('totalUnit', $this->_tpl_vars['totalUnit']+$this->_tpl_vars['subject']['subject_unit']); ?>	
									<tr>
										<td><?php echo $this->_tpl_vars['subject']['subject_id']; ?>
</td>
										<td><?php echo $this->_tpl_vars['subject']['subject']; ?>
</td>
										<td><?php echo $this->_tpl_vars['subject']['subject_unit']; ?>
</td>
										<td style="width: 1px; wrap: nowrap;">
											<a href="/enrollment/templates/studentSubject/?subjectID=<?php echo $this->_tpl_vars['subject']['subject_id']; ?>

										&studentID=<?php echo $this->_tpl_vars['subject']['student_id']; ?>
" class="btn btn-danger" title="Delete Subject"><i class="icon icon-remove"></i></a>
										</td>
										
									</tr>
								<?php endforeach; endif; unset($_from); ?>
								<tr>
									<td colspan="2"><span class="pull-right">Total Units</span></td>
									<td colspan="2">
										<label for="Total"><?php echo $this->_tpl_vars['totalUnit']; ?>
</label>
									</td>
								</tr>
							</table>
						<?php endif; ?>
					</div>	
					<footer>
						copyright &copy Busasal.com
					</footer>	
				</form>
			</div>		
		</nav>
	</body>
</html>	