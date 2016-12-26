{extends file='layout/layout.tpl'}

{block name=title}
	Student Enrolly
{/block}

{block name=head}
		<link type="text/css" rel="stylesheet" href="/css/mystyles.css" />
		<script type='text/javascript' src='/js/student_enroly.js'></script>

	{/block}

	{block name=body}
		<nav id="searchStudent">
			<div id="container">
				<form action="/studentsSubjects/" Method="POST">
					<h1>Student Name</h1>
					Name:<input type="text" name="studentName">
					<input type="submit" name="search" value="search"/>
					<a  class="pull-right" href="/">(return)</a></br>	
					{if (!empty($students[1]) && empty($selectedStudent))}
						<ul>
							{foreach from=$students item=student}
								<li>
									{$student.last_name} {$student.first_name}
									(<a type="submit" href="/studentsSubjects/?studentID={$student.student_id}">select</a>)
								</li>
							{/foreach}
						</ul>
					{/if}
				</form>

				<form method="post">
						{if (!empty($selectedStudent))}
							SELECTED NAME:. {$selectedStudent.full_name}</br>
							<br />
							<h1>Enroll to Subject</h1>
							<input type="hidden" name="studentID" value="{$studentID}" />
							<select id="subject_list" name="getSubjectID" onchange="checkSubjectName();">	
								<option value="">(Select Subject)</option>
								{foreach from=$subject item=subjects}
									<option value="{$subjects.subject_id}"> {$subjects.subject}</option>	
								{/foreach}	
							</select>	
							<button id="button_save" type="submit" name="saveSubject" value="saveSubject" disabled>Save</button></br>
						{/if}
						
						{if (!empty($selectedStudent) && !empty($allSubject))}
							<h1>Student Enroll Subjects</br></h1>
							<br />
							{if (!empty($error.message))}
								<div class="alert alert-danger">
								{$error.message}
								{$error.status}
								</div>
							{/if} 
							<table class="table table-bordered table-condensed table-striped"> 
								<tr>
									<th>Subject ID</th>
									<th>Subject</th>
									<th>Subject UNIT</th>
									<th style="width: 1px; white-space: nowrap;">&nbsp;</th>
								</tr>
								{foreach from=$allSubject item=subject}
									<tr>
										<td>{$subject.subject_id}</td>
										<td>{$subject.subject}</td>
										<td>{$subject.subject_unit}</td>
										<td style="width: 1px; wrap: nowrap;">
											<a href="/studentsSubjects/?subjectID={$subject.subject_id}
											&studentID={$subject.student_id}&action=delete" class="btn btn-danger" title="Delete Subject"><i class="icon icon-remove"></i></a>
										</td>
									</tr>
								{/foreach}
								<tr>
									<td colspan="2"><span class="pull-right">Total Units</span></td>
									<td colspan="2">
										<label for="Total">{$totalUnit}</label>
									</td>
								</tr>
							</table>
							{if ($isStudentPayed[0].payed == 'not yet paid')}
								<a id="payment"  href="/Cashier/?studentID={$studentID}&
								studentName={$selectedStudent.full_name} " 
								class="btn btn-success pull-right"  title="payment"  >pay</a>
							
								<div class="clearfix"></div>
							{/if}
						{/if}
		
				</form>
				<footer>
					<center>
						copyright &copy Busasal.com
					</center>
				</footer>	
			</div>		
		</nav>
	{/block}	

