<html>
<body>
<?php  
/*
$arr1 = array("a" => "b", "c", "d's", "e" => array("f's", "g" => array("h's", "i" => "j's")));
$arr2 = mdarr_parameter($arr1);
$arr3 = mdarr_parameter($arr2, true);

function mdarr_parameter($needle, $job=false) {
    if (is_array($needle)) {
        foreach($needle as $name => $value) {
            $needle[$name] = mdarr_parameter($value, $job);
        }
    } else {
        // Now you do anything you want...
        if ($job === true) {
            $needle = stripslashes($needle);
        } else {
            $needle = addslashes($needle);
        }
    }
    return $needle;
}

print_r($arr2);
print_r($arr3);

/**
Outputs:

Array
(
    [a] => b
    [0] => c
    [1] => d\'s
    [e] => Array
        (
            [0] => f\'s
            [g] => Array
                (
                    [0] => h\'s
                    [i] => j\'s
                )

        )

)
Array
(
    [a] => b
    [0] => c
    [1] => d's
    [e] => Array
        (
            [0] => f's
            [g] => Array
                (
                    [0] => h's
              )

        )

)
*/
/*
//Example #1 Pseudo code to demonstrate function use

function foo($arg_1, $arg_2, $arg_n)
{
		echo "Example function.\n" ; 
		return $retval;
}
*/
//Example #2 Conditional functions
/*
$makefoo = true;

/* We can't call foo() from here 
   since it doesn't exist yet, 
   but we can call bar() */
/*   
 bar();

if ($makefoo) {
	function foo()
	{
		echo " I don't exist until program execution reaches me. \n";
    }
} 
/*
/* Now we can safetly call foo()
   since $makefoo evaluated to true */
 /*  
if ($makefoo) foo();

function bar()
{
	echo "I exist immediately upon program start . \n";
} 
 */
/* 
 // Example #3 Functions within functions
 function foo()
 {
	 function bar()
	 {
		 echo "I don't exist until foo() is called .\n";
	 }
 }
 
 // we can.t call bar() yet since it doesn't exist. 
 
 foo();
 
// Noe we can call bar(), foo()'s processing has made it accessible.
*/
/*
// Example #4 Recursive functions

function recursion($a)
{
	if ($a < 20) {
		echo "$a\n";
		recursion($a + 1);
	}
}
*/



?>
</body>
</html>
