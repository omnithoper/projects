<?php
if (isset($_POST['language'])){
	$language = $_POST['language'];
	echo 'You selected', $language;
}

?>
<form action "radio.php" method="post">
	<p>
		<input type="radio" name="language" value=" PHP" /> PHP<br />
		<input type="radio" name="language" value=" C" /> C<br />
		<input type="radio" name="language" value=" Basic" /> BASIC
	<p><input type="submit" value="Submit"/></P>
</form>
