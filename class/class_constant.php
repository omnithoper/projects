<html>
<Body>
<?php
/*
// Example #1 Defining and using a constant 
class MyClass
{
     const CONSTANT = 'constant value';
  
     function showConstant() {
         echo self::CONSTANT . "\n" ;
     }
}
echo Myclass::CONSTANT . "\n.".'<br/>';

$classname = "MyClass";
echo $classname::CONSTANT . "\n".'<br/>'; // As of PHP 5.3.0

$class = new MyClass();
$class->showConstant();

echo $class::CONSTANT . "\n"; // As of PHP 5.3.0
*/
/*
// Example #2 Static data example
class foo {
    // As of PHP 5.3.0
    const BAR = <<<'EOT'
bar
EOT;
    // As of PHP 5.3.0
    const BAZ = <<<EOT
baz
EOT;
}
*/
// Example #3 Constant expression example
/*
const ONE = 1;

class foo {
	// as of PHP 5.6.0
	const TWO = ONE * 2;
	const THREE = ONE + self::TWO;
	const SENTENCE = ' The value of THREE IS '.self::THREE;
	
}
*/
/*
// Example #4 Class constant visibility modifiers
class Foo {
	// AS of PHP 7.1.0
	public const BAR = 'bar';
	private const BAZ = 'baz';
}
echo Foo::BAR, PHP_EOL;
echo Foo::BAZ, PHP_EOL;	
?>
*/
abstract class dbObject
{    
    const TABLE_NAME='undefined';
    
    public static function GetAll()
    {
        $c = get_called_class();
        return "SELECT * FROM `".$c::TABLE_NAME."`";
    }    
}

class dbPerson extends dbObject
{
    const TABLE_NAME='persons';
}

class dbAdmin extends dbPerson
{
    const TABLE_NAME='admins';
}

echo dbPerson::GetAll()."<br>";//output: "SELECT * FROM `persons`"
echo dbAdmin::GetAll()."<br>";//output: "SELECT * FROM `admins`"
?>
</body>
</html>
