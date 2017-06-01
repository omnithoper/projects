{extends file='layout/layout.tpl'}

{block name=title}
	ADD Student
{/block}

{block name=head}
		<head>

		<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/css/mystyles.css" />
		<script type='text/javascript' src='../../js/subjectAdd.js'></script>
{/block}
	{block name=body}
		<form method="post">
		<nav id ="searchStudent">
			<div id="container">
				<h1>Add Subject</h1>
				{if (!empty($result.error))}
						<div>
							{$result.error}
						</div>
				{/if}
				<h3 id="input"></h3>
				<input id="subject" type="text" name="subject" onchange="checkInput();" /> Subject<br/>
				<input id="lec_unit" type="text" name="lec_unit" /> Lecture Unit<br/>
				<input id="lab_unit" type="text" name="lab_unit" /> Laboratory Unit<br/>
				<input id="subject_unit" type="text" name="subject_unit" onchange="checkInput();" /> Subject
				 Unit<br/>
				<input class="btn" id="button_save" type="submit" name="save" value="save" value="save" disabled>
				<a style="float:right" href="/subjects">(Return)</a>
			</div>
		</nav>	
		</form>

{/block}