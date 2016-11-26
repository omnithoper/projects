<?php

$name = "Anthony";

if ($name == "Anthony")
{
	echo "Hi, Anthony.";
}
else 
{

echo "
You're not Anthony? Please Type your name:<br />
<form Action='formpost.php' method='POST'>
<input type='text' name='name'><input type='submit' value='submit'>
</form>
";
}