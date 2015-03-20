<?php
/**
Write a PHP script AnnualExpenses.php that receives n years from an input HTML form and creates a table (like the one shown below)
 * with random expenses by months and the corresponding years (n years back).
 * For example, if N is 10, create a table that shows the expenses for each month for the last 10 years. Add a
 * "Total" column at the end, showing the total expenses for the same year. The random expenses in the table should be in the range [0…999].
 * Styling the page is optional
 */
?>

<!DOCTYPE html>
<?php
if(isset($_POST['years']))
{
    $years = $_POST['years'];
    $currentYear = date("Y");

    $result = '';

    for($i = 0; $i < $years ;$i++) {
        $Expenses01 = rand(0, 999);
        $Expenses02 = rand(0, 999);
        $Expenses03 = rand(0, 999);
        $Expenses04 = rand(0, 999);
        $Expenses05 = rand(0, 999);
        $Expenses06 = rand(0, 999);
        $Expenses07 = rand(0, 999);
        $Expenses08 = rand(0, 999);
        $Expenses09 = rand(0, 999);
        $Expenses10 = rand(0, 999);
        $Expenses11 = rand(0, 999);
        $Expenses12 = rand(0, 999);

        $sum = $Expenses01 + $Expenses02 + $Expenses03 + $Expenses04 + $Expenses05 + $Expenses06 +
            $Expenses07 + $Expenses08 + $Expenses09 + $Expenses10 + $Expenses11 + $Expenses12;

        $result .= "<tr><td>{$currentYear}</td><td>{$Expenses01}</td><td>{$Expenses02}</td>" .
            "<td>{$Expenses03}</td><td>{$Expenses04}</td>" .
            "<td>{$Expenses05}</td><td>{$Expenses06}</td>" .
            "<td>{$Expenses07}</td><td>{$Expenses08}</td>" .
            "<td>{$Expenses09}</td><td>{$Expenses10}</td>" .
            "<td>{$Expenses11}</td><td>{$Expenses12}</td><td>{$sum}</td></tr>";
        $currentYear--;
    }
}
?>
<html>
<head>
    <title>Show Annual Expenses</title>
    <style>
        td, th {
            padding: 5px;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <label for="years">Enter number of years:</label>
    <input type="text" id="years" name="years"/>
    <input type="submit" value="Show costs"/>
</form>
<table border="1" style="margin-top:40px;">
    <thead>
    <tr>
        <th>Year</th>
        <th>January</th>
        <th>February</th>
        <th>March</th>
        <th>April</th>
        <th>May</th>
        <th>June</th>
        <th>July</th>
        <th>August</th>
        <th>September</th>
        <th>October</th>
        <th>November</th>
        <th>December</th>
        <th>Total:</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if(isset($result)) {
        echo $result;
    }
    ?>
    </tbody>
</table>
</body>
</html>