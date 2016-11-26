<html>
<body>
<head>
</head>

<?php include 'class_lib.php'; ?>


<?php  

      $stefan = new person("Stefan Mischook");
	  $jimmy = new person("Amanda Cabrera");
	  $sunday = new person("Sunday is a Dog");

	  /*
	    $stefan->set_name("Stefan Mischook");
        $jimmy->set_name("Amanda Cabrera"); 
		$sunday->set_name("Sunday is a Dog");
      */
 	  
	  echo "Stepan's full name: " . $stefan->name . '<br/>';
	  echo "Sunday's full name: " . $sunday->name . '<br/>';
	  
	  echo "Stefan's full name: " . $stefan->get_name() . '<br/>'; 
	  echo "Nick's full name: " . $jimmy->get_name() . '<br/>';
	  
	  
	  /*
	  Since $pinn_number was declared private, this line of code 
	  will generate an error. Try it out!   
	  */ 
      $james = new employee("Sunday is a Good Dog");
	  echo   "---->" . $james->get_name();
     // echo "Tell me private stuff: " . $stefan->pinn_number;	  
?>	  
 
</body>
</html>

