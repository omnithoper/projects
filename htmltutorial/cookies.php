<?php
/*
$exp= time()+86400;
setcookie("name","Anthony",$exp);
setcookie("age",19,$exp);
*/
/*
$exp_unset = time-86400;
setcookie("name","",$exp_unset)
*/
if (isset($_COOKIE['name'])){
	//echo "I am " .$_COOKIE['age']. " years old and my name is ".$_COOKIE['name'];
	echo 'cookie is set';
} else {
	echo 'cookie is not set.';
}	
?> 	