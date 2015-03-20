<?php
/*Write a PHP script InformationTable.php which generates an HTML table by given information about a person (name, phone number, age, address).
Styling the table is optional. Semantic HTML is required. Examples:
Input	Output: see word file
Gosho
0882-321-423
24
Hadji Dimitar
Pesho
0884-888-888
67
Suhata Reka

 */
$name = 'Gosho';
$phoneNumber = "0882-321-213";
$age = 24;
$address = "Hadji Dimitar";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Information Table</title>
</head>
<body>
    <table>
        <tbody>
            <tr>
                <td>Name</td>
                <td><?= $name ?></td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td><?= $phoneNumber ?></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><?= $age ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?= $address ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>