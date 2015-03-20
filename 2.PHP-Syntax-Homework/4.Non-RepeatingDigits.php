<?php
/**
 * Write a PHP script NonRepeatingDigits.php that declares an integer variable N,
 * and then finds all 3-digit numbers that are less or equal than N (<= N) and consist of unique digits. Print "no" if no such numbers exist. Examples:
Input	Output
1234	102, 103, 104, 105, 106, 107, 108, 109, 120, 123, 124, 125, 126, 127, 128, 129, 130, 132, 134, 135, …, 980, 981, 982, 983, 984, 985, 986, 987

 */

$digits = findDigits(1234);
printResult($digits);

$digits = findDigits(145);
printResult($digits);

$digits = findDigits(15);
printResult($digits);

$digits = findDigits(247);
printResult($digits);

function printResult($digits)
{
    if(count($digits) > 0) //if the count of digits is bigger than 0 = if there are any digits at all,
    {
        echo implode(', ', $digits); //print them out, joined with comma and space in between
    }
    else //in any other cases print = no
    {
        echo "no";
    }
    echo "<hr>"; //draw a line
}

function findDigits($n)
{
    $array = []; //declare an array to use
    if($n < 100)
    {
        return $array;
    }

    for($i = 1; $i <= 9; $i++)
    {
        for($j = 0; $j <= 9; $j++)
        {
            for($k = 0; $k <=9; $k++)
            {
                if($i != $j && $j != $k && $k !=$i) //if there are no coincidences,
                {
                    $result = "${i}${j}${k}"; //then type out this number(these digits), because this is the condition of the task itself.

                    if((int)$result <= $n) //if the result is less or equal to the number introduced from input(the same number that the current result came from),
                    {
                        array_push($array, $result); //then add the result num in the array's length
                        //http://php.net/manual/en/function.array-push.php
                    }
                }
            }
        }
    }

    return $array;
}

/*
<?php
$n = 1234;
if ($n < 100)
{
    echo 'no';
}
else
{
    for ($i = 102; $i <= $n; $i++)
    {
        if ($i > 987)
        {
            break;
        }
        $firstDigit = $i / 100 % 10;
        $secondDigit = $i / 10 % 10;
        $thirdDigit = $i % 10;

        if ($firstDigit != $secondDigit && $firstDigit != $thirdDigit && $secondDigit != $thirdDigit)
        {
            echo $i . ', ';
        }
    }
}

*/
/*
<?php

function uniqueNumbers($num)
{
    if ($num < 100)
    {
        echo 'no';
    }
    for ($i = 101; $i <= $num; $i++)
    {
        if ($i > 999)
        {
            return;
        }
        $varToString = $i . '';
        if ($varToString[0] != $varToString[1] && $varToString[0] != $varToString[2] && $varToString[1] != $varToString[2])
        {
            echo $varToString . ', ';
        }
    }
}

uniqueNumbers(1234);
uniqueNumbers(145);
uniqueNumbers(15);
uniqueNumbers(1004);
?>
*/