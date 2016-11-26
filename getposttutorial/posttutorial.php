
<form action = "posttutorial.php" method ="POST">
      Please enter your password:<br>
	  <input type="password" name="password"><br>
      <input type="submit" value="Submit">	  
</form>	  
<?php
$password = 'password';

if (isset($_POST['password'])&&!empty($_POST['password'])){
    $password_post = $_POST['password'];
	if ($password_post == $password) {
	echo 'Correct Password';
	} else {
		echo 'incorrect password';
	} 
}
?>  