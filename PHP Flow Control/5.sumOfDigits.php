<?php
/**
 *
 * Write a PHP script SumOfDigits.php which receives a comma-separated list of integers from an input form and creates a two-column table.
 * The first column should contain each of the values from the input. The second column should contain the sum of the digits of each value.
 * If the value is not an integer number, print "I cannot sum that". Styling the page is optional.
 */
?>

<!DOCTYPE html>
<?php
if(isset($_POST['input'])) {
    $allStrings = explode(',', $_POST['input']);

    $result = '<table border="1">';

    for($i = 0; $i < count($allStrings) ;$i++) {
        $result .= "<tr><td>{$allStrings[$i]}</td><td>";
        if(is_numeric($allStrings[$i]) && !preg_match("/\\./", $allStrings[$i])) {
            $sum = array_sum(str_split($allStrings[$i]));
            $result .= $sum;
        }
        else {
            $result .= "I cannot sum that";
        }
        $result .= '</td></tr>';
    }
    $result .= '</table>';
}

?>
<html>
<head>
    <title>Sum Of Digits</title>
    <style>
        table {
            margin-top:30px;
        }
        td {
            padding:5px;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <label for="input-string">Input string:</label>
    <input type="text" name="input" id="input-string"/>
    <input type="submit" value="Submit"/>
</form>
<div id="result">
    <?php
    if(isset($result)) {
        echo $result;
    }
    ?>
</div>
</body>
</html>