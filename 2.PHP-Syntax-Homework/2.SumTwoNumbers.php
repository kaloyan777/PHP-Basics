<?php
/**
Write a PHP script SumTwoNumbers.php that decleares two variables, firstNumber and secondNumber. They should hold integer or floating-point numbers (hard-coded values). Print their sum in the output in the format shown in the examples below. The numbers should be rounded to the second number after the decimal point. Find in Internet how to round a given number in PHP. Examples:
Input	Output
2
5	$firstNumber + $secondNumber = 2 + 5 = 7.00
1.567808
0.356	$firstNumber + $secondNumber = 1.567808 + 0.356 = 1.92
1234.5678
333	$firstNumber + $secondNumber = 1234.5678 + 333 = 1567.57

 */

function printResult($firstNum, $secondNum)
{
    $result = (float)($firstNum + $secondNum); //float.parse the result number
    echo '$firstNum + $secondNum = '
    . "$firstNum + $secondNum = "
        . number_format($result, 2, '.', '') . "</br>"; //format the printout value
    //http://php.net/manual/en/function.number-format.php — Format a number with grouped thousands
    //number_format: This function supports one, two, or four parameters (not three). That's why there has to be '' as last one so to print the result.
}

//now that the function calculation princip is done, execute these function parameters to make some checks
$firstNum = 2;
$secondNum = 5;
printResult($firstNum, $secondNum);

$firstNum = 1.567808;
$secondNum = 0.356;
printResult($firstNum, $secondNum);

$firstNum = 1234.5678;
$secondNum = 333;
printResult($firstNum, $secondNum);