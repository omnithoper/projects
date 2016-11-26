<?php /* Smarty version 2.6.30, created on 2016-11-16 14:09:56
         compiled from studentPaginated.tpl */ ?>
<html>
	<head>
		<title>Student Records</title>
		<link type="text/css" rel="stylesheet" href="/enrollment/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/enrollment/css/mystyles.css" />
	</head>
	<body>
	<form>	
		<nav id="searchStudent">
			<div id="container">
				<h1>Student Records</h1>
					<a style="float:left" href="/enrollment">(Return)</a>
					<a class="pull-right btn btn-success" href="/enrollment/templates/student/studentAdd.php">
					<i class="icon-plus"></i></a></br>
					<p><a href='../../enrollment/templates/student/'>View All</a> | <b>View Page:</b>
						<?php unset($this->_sections[$this->_tpl_vars['show_page']]);
$this->_sections[$this->_tpl_vars['show_page']]['name'] = $this->_tpl_vars['show_page'];
$this->_sections[$this->_tpl_vars['show_page']]['start'] = (int)1;
$this->_sections[$this->_tpl_vars['show_page']]['loop'] = is_array($_loop=$this->_tpl_vars['total_pages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections[$this->_tpl_vars['show_page']]['step'] = ((int)$this->_tpl_vars['show_page']++) == 0 ? 1 : (int)$this->_tpl_vars['show_page']++;
$this->_sections[$this->_tpl_vars['show_page']]['show'] = true;
$this->_sections[$this->_tpl_vars['show_page']]['max'] = $this->_sections[$this->_tpl_vars['show_page']]['loop'];
if ($this->_sections[$this->_tpl_vars['show_page']]['start'] < 0)
    $this->_sections[$this->_tpl_vars['show_page']]['start'] = max($this->_sections[$this->_tpl_vars['show_page']]['step'] > 0 ? 0 : -1, $this->_sections[$this->_tpl_vars['show_page']]['loop'] + $this->_sections[$this->_tpl_vars['show_page']]['start']);
else
    $this->_sections[$this->_tpl_vars['show_page']]['start'] = min($this->_sections[$this->_tpl_vars['show_page']]['start'], $this->_sections[$this->_tpl_vars['show_page']]['step'] > 0 ? $this->_sections[$this->_tpl_vars['show_page']]['loop'] : $this->_sections[$this->_tpl_vars['show_page']]['loop']-1);
if ($this->_sections[$this->_tpl_vars['show_page']]['show']) {
    $this->_sections[$this->_tpl_vars['show_page']]['total'] = min(ceil(($this->_sections[$this->_tpl_vars['show_page']]['step'] > 0 ? $this->_sections[$this->_tpl_vars['show_page']]['loop'] - $this->_sections[$this->_tpl_vars['show_page']]['start'] : $this->_sections[$this->_tpl_vars['show_page']]['start']+1)/abs($this->_sections[$this->_tpl_vars['show_page']]['step'])), $this->_sections[$this->_tpl_vars['show_page']]['max']);
    if ($this->_sections[$this->_tpl_vars['show_page']]['total'] == 0)
        $this->_sections[$this->_tpl_vars['show_page']]['show'] = false;
} else
    $this->_sections[$this->_tpl_vars['show_page']]['total'] = 0;
if ($this->_sections[$this->_tpl_vars['show_page']]['show']):

            for ($this->_sections[$this->_tpl_vars['show_page']]['index'] = $this->_sections[$this->_tpl_vars['show_page']]['start'], $this->_sections[$this->_tpl_vars['show_page']]['iteration'] = 1;
                 $this->_sections[$this->_tpl_vars['show_page']]['iteration'] <= $this->_sections[$this->_tpl_vars['show_page']]['total'];
                 $this->_sections[$this->_tpl_vars['show_page']]['index'] += $this->_sections[$this->_tpl_vars['show_page']]['step'], $this->_sections[$this->_tpl_vars['show_page']]['iteration']++):
$this->_sections[$this->_tpl_vars['show_page']]['rownum'] = $this->_sections[$this->_tpl_vars['show_page']]['iteration'];
$this->_sections[$this->_tpl_vars['show_page']]['index_prev'] = $this->_sections[$this->_tpl_vars['show_page']]['index'] - $this->_sections[$this->_tpl_vars['show_page']]['step'];
$this->_sections[$this->_tpl_vars['show_page']]['index_next'] = $this->_sections[$this->_tpl_vars['show_page']]['index'] + $this->_sections[$this->_tpl_vars['show_page']]['step'];
$this->_sections[$this->_tpl_vars['show_page']]['first']      = ($this->_sections[$this->_tpl_vars['show_page']]['iteration'] == 1);
$this->_sections[$this->_tpl_vars['show_page']]['last']       = ($this->_sections[$this->_tpl_vars['show_page']]['iteration'] == $this->_sections[$this->_tpl_vars['show_page']]['total']);
?>
								<a href='studentPaginated.php?page=$show_page'>$show_page</a> 		
						<?php endfor; endif; ?>	
					</p>	
						<table class="table table-bordered table-condensed table-striped"> 
						<tr> <th>ID</th> <th>First Name</th> <th>Last Name</th> <th></th> <th></th></tr>
						<?php unset($this->_sections[$this->_tpl_vars['show_page']]);
$this->_sections[$this->_tpl_vars['show_page']]['name'] = $this->_tpl_vars['show_page'];
$this->_sections[$this->_tpl_vars['show_page']]['start'] = (int)1;
$this->_sections[$this->_tpl_vars['show_page']]['loop'] = is_array($_loop=$this->_tpl_vars['end']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections[$this->_tpl_vars['show_page']]['step'] = ((int)"show_page++") == 0 ? 1 : (int)"show_page++";
$this->_sections[$this->_tpl_vars['show_page']]['show'] = true;
$this->_sections[$this->_tpl_vars['show_page']]['max'] = $this->_sections[$this->_tpl_vars['show_page']]['loop'];
if ($this->_sections[$this->_tpl_vars['show_page']]['start'] < 0)
    $this->_sections[$this->_tpl_vars['show_page']]['start'] = max($this->_sections[$this->_tpl_vars['show_page']]['step'] > 0 ? 0 : -1, $this->_sections[$this->_tpl_vars['show_page']]['loop'] + $this->_sections[$this->_tpl_vars['show_page']]['start']);
else
    $this->_sections[$this->_tpl_vars['show_page']]['start'] = min($this->_sections[$this->_tpl_vars['show_page']]['start'], $this->_sections[$this->_tpl_vars['show_page']]['step'] > 0 ? $this->_sections[$this->_tpl_vars['show_page']]['loop'] : $this->_sections[$this->_tpl_vars['show_page']]['loop']-1);
if ($this->_sections[$this->_tpl_vars['show_page']]['show']) {
    $this->_sections[$this->_tpl_vars['show_page']]['total'] = min(ceil(($this->_sections[$this->_tpl_vars['show_page']]['step'] > 0 ? $this->_sections[$this->_tpl_vars['show_page']]['loop'] - $this->_sections[$this->_tpl_vars['show_page']]['start'] : $this->_sections[$this->_tpl_vars['show_page']]['start']+1)/abs($this->_sections[$this->_tpl_vars['show_page']]['step'])), $this->_sections[$this->_tpl_vars['show_page']]['max']);
    if ($this->_sections[$this->_tpl_vars['show_page']]['total'] == 0)
        $this->_sections[$this->_tpl_vars['show_page']]['show'] = false;
} else
    $this->_sections[$this->_tpl_vars['show_page']]['total'] = 0;
if ($this->_sections[$this->_tpl_vars['show_page']]['show']):

            for ($this->_sections[$this->_tpl_vars['show_page']]['index'] = $this->_sections[$this->_tpl_vars['show_page']]['start'], $this->_sections[$this->_tpl_vars['show_page']]['iteration'] = 1;
                 $this->_sections[$this->_tpl_vars['show_page']]['iteration'] <= $this->_sections[$this->_tpl_vars['show_page']]['total'];
                 $this->_sections[$this->_tpl_vars['show_page']]['index'] += $this->_sections[$this->_tpl_vars['show_page']]['step'], $this->_sections[$this->_tpl_vars['show_page']]['iteration']++):
$this->_sections[$this->_tpl_vars['show_page']]['rownum'] = $this->_sections[$this->_tpl_vars['show_page']]['iteration'];
$this->_sections[$this->_tpl_vars['show_page']]['index_prev'] = $this->_sections[$this->_tpl_vars['show_page']]['index'] - $this->_sections[$this->_tpl_vars['show_page']]['step'];
$this->_sections[$this->_tpl_vars['show_page']]['index_next'] = $this->_sections[$this->_tpl_vars['show_page']]['index'] + $this->_sections[$this->_tpl_vars['show_page']]['step'];
$this->_sections[$this->_tpl_vars['show_page']]['first']      = ($this->_sections[$this->_tpl_vars['show_page']]['iteration'] == 1);
$this->_sections[$this->_tpl_vars['show_page']]['last']       = ($this->_sections[$this->_tpl_vars['show_page']]['iteration'] == $this->_sections[$this->_tpl_vars['show_page']]['total']);
?>
						
						
							<?php if (( $this->_tpl_vars['show_page'] == $this->_tpl_vars['total_results'] )): ?>  
						
							<?php endif; ?>

							<?php echo $this->_tpl_vars['result']->data_seek($this->_tpl_vars['show_page']); ?>

							<?php echo $this->_tpl_vars['row']; ?>

						
							<td><?php echo $this->_tpl_vars['row'][0]; ?>
</td>
							<td><?php echo $this->_tpl_vars['row'][4]; ?>
 </td>
							<td><?php echo $this->_tpl_vars['row'][5]; ?>
</td>
							<td><a href='../../enrollment/templates/student/studentEdit.php?student_id="<?php echo $this->_tpl_vars['row'][0]; ?>
"'>
							Edit</a></td>
							<td><a href='../../enrollment/templates/student/studentDelete.php?student_id="<?php echo $this->_tpl_vars['row'][0]; ?>
"'>
							Delete</a></td>
						</tr>
						<?php endfor; endif; ?>
					</table>
			</div>
		</nav>		
	</form>
	</body>
</html>