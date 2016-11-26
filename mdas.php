<html>
<head>
</head>
<body>
<?php include 'logic.php'; ?> 

<form method="GET">
<center>
<table style="border: 1px solid black; border collapse; width: 100;">
<tr style="border: 1px solid black;">
<td style="border: 1px solid black;">


The answer is : <?php echo $answer; ?>
<tr>
<td>Enter first Number:<input type="text" name="var1" value="<?php echo $number_one ?>" /> <br/>
Enter Second Number:<input type="text" name="var2" value="<?php echo $number_two ?>" /><br/></td>
</tr>
<tr>
<td style="border: 1px solid black;">
<?php echo $buttonDisplay; ?></td>
<td  colspan ="1" style="border: 1px solid black;">
<button type="submit" value="add" name="MDAS">+</button>
<button type="submit" value="subtract" name="MDAS">-</button>
<button type="submit" value="multiply" name="MDAS">*</button>
<button type="submit" value="divide" name="MDAS">/</button>
<button type="submit" value="clear" name="MDAS">clear</button></td>
</tr>
</table>
</center>
</form>

<table border="1">
<tr>
	<td>col 1</td><td>col s2</td><td>col 3</td>
</tr>
<tr>
	<td colspan="2">col span</td><td>spare</td>
</tr>
</table>


</body>
<html>