<html>
<head>
<script type='text/javascript'>

	function myFunction() {
	
		var x = 1;

		
	  			document.getElementById("var1").value = x ;
	 	
			
			}
		
			
	
</script>	
</head>
	<body>
<?php include 'logic.php'; ?>
	<form>
		<table id="table">	
	
	 		</table>	
		<input id = "var1" type="text" name="var1" />
		<input type="text" name="var2" />
		<button type="submit" value="add" name="MDAS">add</button>
		<button type="submit" value="subtract" name="MDAS">subtract</button>
		<button type="submit" value="multiply" name="MDAS">multiply</button>
		<button type="submit" value="divide" name="MDAS">divide</button>
		<button type="button" onclick="myFunction()">1</button><br>
<?php		
 $current = 0;
  for ($x = 1; $x <= 3; $x++)   {
	 
	for ($y = 1+$current; $y <= 3+$current; $y++) {
		echo "<button type ='submit'> ".($y)."</button>" ; 
	}  
		$current = $y - 1;

	echo " <br />";

  }
   ?>
	</form>


<h1>
	The answer is : <span style="color: <?php echo $color1; ?>"><?php echo $answer; ?></span>
</h1>

<h1>
	The product : <span style="color: <?php echo $color2; ?>"><?php echo $answer2; ?></span>
</h1>


	</body>
<html>
