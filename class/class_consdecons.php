<html>
<body>
<?php
/*
//Example #1 using new unified constructors
class BaseClass {
	function __construct (){
		print "In BaseClass Constructor\n";	
	}
}

class SubClass Extends BaseClass {
	function __construct() {
		parent::__construct();
		print "In SubClass constructor\n";
	}
}

class OtherSubClass Extends BaseClass {
	//  inherits BaseClass's constructor
}
// In BaseClass constructor
$obj = new BaseClass();

// In BaseClass constructor
// In SubClass constructor
$obj = new SubClass();

// In BaseClass constructor
$obj = new OtherSubClass();
*/
/*
Example #2 Constructors in namespaced classes
namespace Foo;
class Bar {
	public function Bar() {
		
	}
}
*/
/*
//Example #3 Destructor Example
class MyDestructableClass {
	function __construct() {
		print "In constructor\n";
		$this->name = "MydestructableClass";
    }

    function __destruct() {
		print "destroying " . $this->name . "\n";
	}
}
$obj = new MyDestructableClass();	
*/

// example of contruct with array

class A
{ 
	function __construct()
	{ 
		$a = func_get_args();
		$i = func_num_args();
		if (method_exists($this,$f='__construct' .$i)){
			call_user_func_array(array($this,$f),$a);
		}
	}
	function __construct1($a1)
	{
		echo('__construct with 1 param called: ' .$a1.PHP_EOL). '<br/>';
	}
	function __construct2($a1,$a2)
	{
		echo('__construct with 2 params called: ' . $a1.','.$a2.PHP_EOL).'<br/>' ;
	}
	function __construct3($a1,$a2,$a3)
	{
		echo('__construct with 3 params called: 
		'.$a1.','.$a2.','.$a3.PHP_EOL);
	}
}
$o = new A('sheep');
$o = new A('sheep','cat');
$o = new A('sheep','cat','dog');	

/*
// putting in more layman's term

class dad{
    
    function __construct() {
        echo get_class($this) . ' is fair and tall <br>';
    }
}

//inherit and overidding parent constructor
class son extends dad{
    
    function __construct(){
        parent::__construct();
        echo get_class($this) . ' is handsome <br>';
    }
}

//overidding parent constructor
class daughter extends dad{
    function __construct(){
        echo get_class($this) . ' is tan like her mother <br>';
        echo get_class($this) . ' is pretty and has nothing to do with dad <br>';
    }
}

echo 'im dad: <br>';
$dad = new dad();

echo '<br>';

echo 'born a son: <br>';
$son = new son();

echo '<br>';

echo 'born a daughter: <br>';
$daughter = new daughter();
*/
?>


</body>
</html>