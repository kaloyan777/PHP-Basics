<?php
/**
 * Write a PHP script DumpVariable.php that declares a variable.
 * If the variable is numeric, print it by the built-in function var_dump().
 * If the variable is not numeric, print its type at the input.

Examples:
Input	Output
"hello"	string
15	int(15)
1.234	double(1.234)
array(1,2,3)	array
(object)[2,34]	object

 */

$string = "hello";
printVariableType($string);

$int = 15;
printVariableType($int);

$float = 1.234;
printVariableType($float);

$array = array(1,2,3);
printVariableType($array);

$object = (object)['property' => '2, 34'];
printvariableType($object);

function printVariableType($variable)
{
    if(is_numeric($variable))
    {
        var_dump($variable); //http://php.net/manual/en/function.var-dump.php
    }
    else
    {
        echo gettype($variable);
    }
    echo "</br>";
}
//interesting: http://stackoverflow.com/questions/8011904/why-does-the-gettype-say-its-a-double-but-var-dump-says-float
?>

/*
<?php

$isNumeric = 15;

if (is_integer($isNumeric) || is_double($isNumeric))
{
    var_dump($isNumeric);
}
else
{
    echo gettype($isNumeric);
}

?>
*/