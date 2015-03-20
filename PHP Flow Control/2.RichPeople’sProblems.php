<?php
/**
You are a very rich billionaire with an unhidden passion for cars.
 * You like certain car manufacturers but you don’t really care about anything else,
 * and that’s why you need your own randomizing algorithm that helps you decide how many and what color cars you should buy.
 * Write a PHP script CarRandomizer.php that receives a string of cars from an input HTML form, separated by a comma and space (“, “).
 * It then prints each car, a random color and a random quantity in a table like the one shown below. Use colors by your choice.
 * Use as quantity a random number in range [1...5]. Styling the page is optional.
 */
?>

<!DOCTYPE html>
    <?php
        if(isset($_POST['cars']))
        {
            $allCars = explode(',', $_POST['cars']);
            $allColors = array('aqua', 'black', 'blue', 'fuchsia', 'gray', 'green', 'lime', 'maroon', 'navy',
                'olive', 'orange', 'purple', 'red', 'silver', 'teal', 'white', 'yellow');
            $resultTable = '';
            for($i = 0; $i < count($allCars) ;$i++)
            {
                $color = $allColors[rand(0, 16)];
                $count = rand(1, 5);
                $resultTable .= "<tr><td>{$allCars[$i]}</td><td>{$color}</td><td>{$count}</td></tr>";
            }
        }
    ?>

<head>
    <title>Rich People`s Problems</title>
    <style>
        table
        {
            margin-top:40px;
        }
        td, th
        {
            padding:5px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="cars">Enter Cars</label>
        <input type="text" name="cars" id="cars"/>
        <input type="submit" value="Show Results"/>
    </form>
    <table border="1">
        <thead>
            <tr>
                <th>Car</th>
                <th>Color</th>
                <th>Count</th>
            </tr>
        </thead>
        <tbody>
        <?php
            if(isset($resultTable))
            {
                echo $resultTable;
            }
        ?>
        </tbody>
    </table>
</body>
</html>
