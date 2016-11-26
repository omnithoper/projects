<html>
<body>
<h1> Simple Calculator</h1>
<?php
 
if ($_POST['Add']) {
   echo 'the sum is<br />';
   $var3 = $_POST['var1'] + $_POST['var2'];
   echo $var3;
}
else if ($_POST['Subtract']){
  
   echo 'the subtance is<br />';
   $var3 = $_POST['var1'] - $_POST['var2'];
   echo $var3;
}
 
?>
</body>
</html>
