<html>
<body>
<?php 

/*
// Example #1 Simple Class definition
class SimpleClass
{
   // property declaration
   public $var = 'a default value';
   
   // method declaration
   public function displayVar() {
	    echo $this->var;
   }
} 
*/
/*
// Example #2 Some examples of the $this pseudo-variable
class A
{
	function foo()
	{	
	  if (isset($this)) {
	      echo '$this is defined(';
	      echo get_class($this);
	      echo")\n";
	  }  else {
		  echo "$this is not defined.\n";
	  } 

	}
}	
class B
{
	function bar()
	{
		a::foo();
	}
}
$a = new A();
$a->foo();

A::foo();
$b = new B();
$b->bar().'<br/>';

B::bar();

*/
/*
example #3 Creating an instance
$instance = new SimpleClass();

// this can also be done with a variable:
$className = 'Simple Class':
$instance = new $className(); // new SimpleClass()
*/
/*
// Example #4 Object Assignment
$instance = new SimpleClass();

$assigned  = $instance;
$reference =& $instance;

$instance->var = '$assigned will have this value';

$instance = null; // $instance and $reference become null

var_dump($instance);
var_dump($reference);
var_dump($assigned);
*/
/*
//Example #5 Creating new objects
class Test
{
	static public function getNew()
	{
		return new static;
	}
}
class Child extends Test
{}
$obj1 = new Test();
$obj2 = new $obj1;
var_dump($obj1 !== $obj2);
if ($obj1 instanceof Child){
	echo 'Test';
}

$obj3 = Child::getNew();
var_dump($obj3 instanceof Test);

$obj4 = Child::getNew();
var_dump($obj4 instanceof Child);
*/
/*
// Example #6 Property access vs. method call
class Foo
{
	public $bar = 'property';
	
	public function bar() {
		return 'method';
	}
}
$obj = new Foo();
echo $obj->bar, PHP_EOL, $obj->bar(), PHP_EOL;
*/
/*
// Example #7 Calling an anonymous function stored in a property
class Foo
{
	public $bar;
	
	public function __construct() {
		$this->bar = function() {
			return 42;
		};
	}
}
$obj = new Foo();

// as of PHP 5.3.0:
$func = $obj->bar;
echo $func(), PHP_EOL;

// alternatively, as of PHP 7.0.0:
// echo ($obj->bar(), PHP_EOL;
//echo ($obj->bar)(), PHP_EOL;
*/
//Example #8 Simple Class Inheritance
/*
class ExtendClass Extends SimpleClass
{
	// Redefine the parent method
	function displayVar()
	{
		echo "Extending class \n";
		parent::displayVar();
	}
}

$extended = new ExtendClass();
$extended->displayVar();
*/
/*
// Example #9 Class name resolution
namespace NS {
    class ClassName {
    }
    
    echo ClassName::class;
}
*/

?>
</body>
</html>
