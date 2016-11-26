<html>
<body>



<head>

<?php 

/* Calculator */ 


if($submit) 
{ 
   if($operator == '*') 
   { 
       echo $numa * $numb; 
   } elseif($operator == '/') 
   { 
       echo $numa / $numb; 
   } elseif($operator == '+') 
   { 
       echo $numa + $numb; 
   } elseif($operator == '-') 
   { 
       echo $numa - $numb; 
   } 
} else { ?> 
<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>"> 
 <input type="text" name="numa" size="10"> 
 <input type="text" name="operator" size="2"> 
 <input type="text" name="numb" size="10"> 
 <input type="submit" value="Calculate" name="submit"> 
</form> 
<?php } ?>


Read more: https://www.webdesign.org/web-programming/php/php-calculator.10025.html#ixzz4LCuffF9C
<head>

<body>

 

<center></br></br>

 

<form name="frm" action="form1.php" method="post">

 Enter Value:

<input type="text" name="first" value= "<?php echo $_REQUEST['number'];

 echo $_REQUEST['calculate'];echo $_REQUEST['result']; ?>"> </br></br>

</from>

 

 

<form name="frm" action="form1.php" method="post">

<input type="submit" name="number" value="1">

</from>



<form name="frm" action="form1.php" method="post">

 <input type="submit" name="number" value="2">

 </from>

  

 <form name="frm" action="form1.php" method="post">

<input type="submit" name="number" value="3"></br></br>

</from>

<form name="frm" action="form1.php" method="post">

<input type="submit" name="number" value="4">

</from>

 

<form name="frm" action="form1.php" method="post">

<input type="submit" name="number" value="5">

</from>

 

<form name="frm" action="form1.php" method="post">

<input type="submit" name="number" value="6"></br></br>

</from>



<form name="frm" action="form1.php" method="post">

<input type="submit" name="number" value="7">

</from>

 

<form name="frm" action="form1.php" method="post">

<input type="submit" name="number" value="8">

</from>

 

 

<form name="frm" action="form1.php" method="post">

<input type="submit" name="number" value="9"></br></br>

</from>

 

<form name="frm" action="form1.php" method="post">

<input type="submit" name="calculate" value="+">

</from>

 

<form name="frm" action="form1.php" method="post">

<input type="submit" name="calculate" value="0">

</from>

 

<form name="frm" action="form1.php" method="post">

<input type="submit" name="calculate" value="*"></br></br>

</from>

<form name="frm" action="form1.php" method="post">

<input type="submit" name="calculate" value="/">

</from>

 

 

<form name="frm" action="form1.php" method="post">

<input type="submit" name="calculate" value="-"></br></br>

</form>

<form name="frm" action="form1.php" method="post">

<input type="submit" value="=" name="result">

 

</form>

 

</center>

</body>

</html>



