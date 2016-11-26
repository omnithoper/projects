<?php
?>
<html>
<head>
<title>
Forms with multiple submit buttons
</title>
</head>
<body>
<form method = "post" action = "<? 
if ($_POST['1'])
{
echo "you have pressed 1";
}
else if ($_POST['2'])
{
echo " you have pressed 2";
}$_SERVER['PHP_SELF'];?>">
<input type ="submit" value=" Press 1 " name ="1">
<input type ="submit" value=" Press 2 " name ="2">

</form>
</body>
</hmtl>
