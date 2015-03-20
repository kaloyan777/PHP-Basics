<?php
/*Write a PHP script PrintTags.php which generates an HTML input text field and a submit button.
In the text field the user must enter different tags, separated by a comma and a space (", ").
When the information is submitted, the script should split the tags, put them in an array and print out the array.
Semantic HTML is required. Styling is not required.
 */?>

<!DOCTYPE html>
    <html>
    <head>
        <title>1.Print_Tags</title>
    </head>

    <body>
        <form action="1.printTags.php" method="get">
            <!--The action attribute specifies where to send the form-data when a form is submitted.-->

            <label for="tags">Enter tags: </label>
            <!--The for attribute specifies which form element a label is bound to.-->

            <input type="text" name="tags"/>
            <!--The type attribute specifies the type of <input> element to display.
            The default type is: text.
            The name attribute specifies the name of an <input> element.
            Note: Only form elements with a name attribute will have their values passed when submitting a form.-->

            <input type="submit" value="Submit"/>
            <!--The value attribute is used differently for different input types:
            For "button", "reset", and "submit" - it defines the text on the button
            For "text", "password", and "hidden" - it defines the initial (default) value of the input field
            For "checkbox", "radio", "image" - it defines the value associated with the input (this is also the value that is sent on submit)
            Note: The value attribute is required with <input type="checkbox"> and <input type="radio">.
            Note: The value attribute cannot be used with <input type="file">.-->
        </form>

        <?php if (isset($_GET['tags']) && $_GET['tags'] != ''): ?>
            <ul>
                <?php
                    $tags = explode(', ', $_GET['tags']); //You must ensure that the delimiter argument comes before the string argument.
                ?>
                <?php for ($i = 0; $i < count($tags); $i++): ?>
                    <li><?= htmlentities($i) ?> : <?= htmlentities($tags[$i]) ?></li>
                <?php endfor ?>
            </ul>
        <?php endif ?>
    </body>
</html>
<?
/*
 * 1- isset = Determine if a variable is set and is not NULL
 * 2- $_GET = The PHP superglobals $_GET and $_POST are used to collect form-data.
 * 3- explode = Split a string by string, The explode() function breaks a string into an array.
 * 4- htmlentities = Convert all applicable characters to HTML entities, Reserved characters in HTML must be replaced with character entities.
 * Characters, not present on your keyboard, can also be replaced by entities.
 * */
?>