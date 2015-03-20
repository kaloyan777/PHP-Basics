<?php
/*
 * Write a PHP script GetFormData.php which retrieves the input data from an HTML form, and displays it as string. The input fields should hold name, age and gender (radio buttons). The returned string should be a message containing the information submitted by the form.
 * 100% accuracy is NOT required. Semantic HTML is required. Example:
Input	Output
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Get Form Data</title>
</head>
<body>
    <form action="Form Data.php" method="post">
        <input type="text" name="name" placeholder="Name..."> <br/>
        <input type="text" name="age" placeholder="Age..."> <br/>

        <input type="radio" name="sex" value="male" id="male-radio">
        <label for="male-radio">Male</label> <br/>

        <input type="radio" name="sex" value="female" id="female-radio">
        <label for="female-radio">Female</label> <br/>

        <input type="submit" value="Submit"> <br/>
    </form>

<?php if (isset($_POST['name'], $_POST['age'], $_POST['sex'])):?> <!--isset — Determines if a variable is set and is not NULL-->
    <p>
        My name is <?= htmlentities($_POST['name']) ?>. I am <?= htmlentities($_POST['age']) ?> years old. I am <?= htmlentities($_POST['sex']) ?>. <!--htmlentities — Convert all applicable characters to HTML entities-->
    </p>
<?php endif; ?>

</body>
</html>

/*
<form method="get">
    <input type="text" name="name" placeholder="Name..."><br>
    <input type="number" name="age" placeholder="Age..."><br>
    <label for="male"><input type="radio" name="sex" id="male" value="male">Male</label><br>
    <label for="female"><input type="radio" name="sex" id="female" value="female">Female</label><br>
    <input type="submit">
</form>
<?php
if($_SERVER['REQUEST_METHOD'] === 'GET') 
{
    $name = $_GET['name'];
    $age = $_GET['age'];
    $sex = $_GET['sex'];
    echo "My name is $name. I am $age years old. I am $sex.";
}
?>

*/