<html>
<body>
<h1>Simple Calculator<h1>
<?php
/*$int = "100a";

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo("Integer is valid");
} else {
    echo("Integer is not valid");
} 
if ($test>=1) {
  trigger_error("Value must be 1 or below");
}
 */
  if (isset($_GET['var1'])){
     $var1 = $_GET['var1'];
   } else {
     $var1=NULL;
   }
   
  if (isset($_GET['var2'])) {
     $var2 = $_GET['var2'];
   } else {
	 $var2=NULL;
   }	
    
  switch($_GET['MDAS']) {
	case 'Add':
		$operations = 'sum';
          $var3 = $var1 + $var2;
          break;
    case 'Subtract':
		$operations = 'substance';
          $var3 = $var1 - $var2;
         break;
    case 'Multiply':
		$operations = 'product';
          $var3 = $var1 * $var2;
         break;	
    case 'Divided':
		$operations = 'divident';
          $var3 = $var1 / $var2;
         break;	
    case 'Clear':
	     $var1 = "";
	     $var2 = "";		 
    }	 
 		 
   
   if (count($_GET) > 0 && $_GET['MDAS'] != 'Clear') {
    if($var1 == NULL) {
		echo "<script language=javascript> alert(\"here Please Enter First value.\");</script>";
    } else if($var2==NULL) {
		echo "<script language=javascript> alert(\"Please Enter second value.\");</script>"; 
	} else if (!is_numeric($var1) || !is_numeric($var1)) {
		echo "<script language=javascript> alert(\"Only numbers are allowed.\");</script>";    
    } else {
		echo "The $operations is: $var3<br />";
	}
   }
 ?>  
<form method="get">
<input type="text" id="var1" name="var1" value="<?php echo $var1 ?>"/> Enter First Number <br />
<input type="text" id="var2" name="var2" value="<?php echo $var2 ?>"/>Enter Second Number <br/>
<button type ="submit" value="Add"     name ="MDAS">Add</button>
<button type ="submit" value="Subtract" name ="MDAS">Subtract</button>
<button type ="submit" value="Multiply" name ="MDAS">Multiply</button>
<button type ="submit" value="Divide" name ="MDAS">Divide</button>
<button type ="submit" value="Clear" name ="MDAS">Clear</button><br/>
<button type ="submit" value="1" name ="1" onclick="">1</button>
<button type ="submit" value="2" name ="2">2</button>
<button type ="submit" value="3" name ="3">3</button><br/>
<button type ="submit" value="4" name ="4">4</button>
<button type ="submit" value="5" name ="5">5</button>
<button type ="submit" value="6" name ="6">6</button><br/>
<button type ="submit" value="7" name ="7">7</button>
<button type ="submit" value="8" name ="8">8</button>
<button type ="submit" value="9" name ="9">9</button>
<br />
<?php
	$current = 0;
  for ($x = 1; $x <= 3; $x++) {
	
	for ($y = 1+$current; $y <= 3+$current; $y++) {
		echo "<button type ='submit'> ".($y)."</button>" ; 
	}
		$current = $y - 1;
	
	echo " <br />";
    
  }
 
	echo " <br />";
  
  for ($x = 1; $x <= 9; $x++) {
	
	echo "<button type ='submit'>$x</button>" ; 
	if ($x % 3 == 0) {
		echo " <br />";
	}
    
  }
?>
</form>

</body>
</html>