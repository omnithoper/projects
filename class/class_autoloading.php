<html>
<body>
<?php
/*
//Example #1 Autoload example

//This example attempts to load the classes MyClass1 and MyClass2 from the files MyClass1.php and MyClass2.php respectively.

spl_autoload_register(function($class_name) {
	include $class_name . '.php';
});

$obj  = new MyClass();
$obj2 = new MyClass();
*/
/*
// Example #2 Autoload other example

// This example attempts to load the interface ITest.
 spl_autoload_register(function($name) {
	 var_dump($name);
 });
 
 class FOO implements ITEST {
*/
/*
//Example #3 Autoloading with exception handling for 5.3.0+

//This example throws an exception and demonstrates the try/catch block.
spl_autoload_register(function ($name) {
    echo "Want to load $name.\n";
    throw new Exception("Unable to load $name.");
});

try {
    $obj = new NonLoadableClass();
} catch (Exception $e) {
   // echo $e->getMessage(), "\n";
}
*/
//Example #4 Autoloading with exception handling for 5.3.0+ - Missing custom exception

//This example throws an exception for a non-loadable, custom exception.
spl_autoload_register(function ($name) {
    echo "Want to load $name.\n";
    throw new MissingException("Unable to load $name.");
});

try {
    $obj = new NonLoadableClass();
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
?>
</body>
</html>
