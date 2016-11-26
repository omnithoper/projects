<?php

$name = $_GET['name'];
$age = $_GET['age'];

if (isset($name)&&isset($age)) {
	if (!empty($name)&&!empty($age)) {
        echo 'I am '.$name. ' and my age is ' .$age;		
    } else {
	echo 'Nothing entered.';
    }
}
?>  


<form action = "gettutorial.php" method ="GET">
  Name:<br><input type ="text" name = "name"><br>
   Age:<br><input type ="text" name = "age" size="5"> <br><br>  
           <input type ="submit" value = "submit">
</form> 
