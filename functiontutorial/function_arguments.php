<html>
<body>
<?php
/*
//Example #1 Passing arrays to functions
function takes_array($input)
{
	echo "$input[0] + $input[1] = " , $input[0]+$input[1];
}
*/
/*
// Example #2 Passing function parameters by reference
function add_some_extra(&$string)
{
	$string .= 'and something extra.';
}
$str = ' This is a string,';
add_some_extra($str);
echo $str; // outputs 'this string, and something extra.'
*/
/*
//Example #3 Use of default parameters in functions
function makecoffee($type = "cappucino")
{
	return "Making a cup of $type.\n";
}
echo makecoffee(). '<br/>';
echo makecoffee(null). '<br/>';
echo makecoffee("espresso");
*/
/*
//Example #4 Using non-scalar types as default values
function makecoffee($types = array("cappuccino"), $coffeeMaker = NULL)
{
	$device = is_null($coffeeMaker) ? "hands" : $coffeeMaker;
	return "Making a cup of ".join(", ", $types)." with $device. \n";
}
echo makecoffee();
echo makecoffee(array("cappucino", "lavazza"), "teapot");
*/
/*
//Example #5 Incorrect usage of default function arguments
function makeyogurt($type = "acidophilus", $flavour)
{
	return "Making a bowl of $type . $flavour.\n";
}
echo makeyogurt("rasberry"); // won't work as expected
*/
/*
// Example #6 Correct usage of default function arguments
function makeyogurt($flavour, $type = "acidophilus")
{
	return "Making a bowl of $type $flavour.\n";
}
echo makeyogurt("rasberry"); // works as expected
*/
/*
// Example #7 Basic class type declaration
class C {}
class D extends C{}

// This doesn't extend C.
class E {}

function f(C $c) {
	echo get_class($c). "\n";
}
f(new C);
f(new D);
f(new E); 
*/
/*
//Example #8 Basic interface type declaration
interface I { public function f();}
class C implements I {public function f(){}}

// This doesn't implement Incorrect
class D implements I {public function f(){}}

class E {}
 
function f(I $i) {
	echo get_class($i)."\n";
}

f(new C);
f(new D);
f(new E);
*/
/*
//Example #9 Nullable type declaration
class C{}

function f(C $c = null) {
	var_dump($c);
}

f(new C);
f(null);
*/
/*
//Example #10 Strict typing
// will only work in PHP 7.0.0 or higher
declare(strict_types = 1);

function sum(int $a, int $b) {
	return $a + $b;
}

var_dump(sum(1,2));
var_dump(sum(1.5,2.5));
*/

/*
//Example #11 Weak typing
// will only work in PHP 7.0.0 or higher
function sum(int $a, int $b) {
	return $a + $b;
}
var_dump(sum(1,2));

// These will be coerced to intergers: note the out below!
var_dump(sum(1.5,2.5));
*/
//Example #12 Catching TypeError
// will only work in PHP 7.0.0 or higher

//declare(strict_types=1);
/*
function sum(int $a, int $b) {
	return $a + $b;
}

try {
	var_dump(sum(1,2));
	var_dump(sum(1.5,2.5));
}catch(typeError $e) {
	echo 'Error; '. $e-> get_Message();
}
*/
/*
//Example #13 Using ... to access variable arguments
function sum(...$numbers) {
	$acc = 0;
	foreach($numbers as $n) {
		$acc +=$n;
	}
	return $acc;
}

echo sum(1,2,3,4,5);
*/
/*
//Example #14 Using ... to provide arguments
function add($a, $b) {
	return $a + $b;
}

echo add(...[5,2]) ."\n";

$a = [1,6];
echo add(...$a);
*/
/*
//Example #15 Type hinted variable arguments
function total_intervals($unit, DateInterval ...$intervals) {
	$time =0;
	foreach ($intervals as $interval) {
		$time += $interval->$unit;
	}
	return $time;
}

$a = new DateInterval('P1D');
$b = new DateInterval('P2D');
echo total_intervals('d', $a, $b). ' days';

// This will fail, since null isn't a DateInterval object.
echo total_intervals('d', null);
*/
//Example #16 Accessing variable arguments in PHP 5.5 and earlier
function sum() {
	$acc = 0;
	foreach (func_get_args() as $n) {
		$acc += $n;
	}
	return $acc;
}
echo sum(1,2,3,4);
?>
</body>
</html>	