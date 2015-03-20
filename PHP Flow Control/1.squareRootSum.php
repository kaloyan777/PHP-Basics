<?php
/**
Write a PHP script SquareRootSum.php that displays a table in your browser with 2 columns.
 * The first column should contain a number (even numbers from 0 to 100) and the second column
 * should contain the square root of that number, rounded to the second digit after the decimal point.
 * The last row of the table should contain the sum of all values in the Square column. Styling the page is optional.
 */
?>
<!DOCTYPE html>
    <?php
        $result = "<table border='1'><thead><tr><th>Number</th><th>Square</th></tr></thead>" . "<tbody>";
        $sum = 0;
        for($i = 0; $i < 100 ;$i++)
        {
            $square = round(sqrt($i), 2);
            $sum += $square;
            $result .= "<tr><td>{$i}</td><td>{$square}</td></tr>";
        }
        $result .= "</tbody><tfoot><tr><td>Sum:</td><td>{$sum}</td></tr></tfoot></table>";
    ?>
<html>
    <head>
        <title>Square Root Sum</title>
        <style>
            th, td
            {
                padding: 5px;
            }
        </style>
    </head>
    <body>
    <?php
        if(isset($result))
        {
            echo $result;
        }
        ?>
    </body>
</html>