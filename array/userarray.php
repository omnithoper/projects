
<?php
include 'userclass.php';
$searchText = !empty($_POST['address'])?$_POST['address']:null;
//$contactinfo = new contacts();
//$address = $contactinfo->DisplaySearchResult();

echo "<form action = 'userarray.php' method ='POST'>
      Please Enter User City:<br>
	  <input type='text' name='address'><br/>
      <input type='submit' value='Search'>	  
</form>";	  
 ?>
 
