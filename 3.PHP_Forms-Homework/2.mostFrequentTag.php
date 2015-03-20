<?php
/*Write a PHP script MostFrequentTag.php which generates an HTML input text field and a submit button.
In the text field the user must enter different tags, separated by a comma and a space (", ").
When the information is submitted, the script should generate a list of the tags, sorted by frequency.
Then you must print: "Most Frequent Tag is: [most frequent tag]".
Semantic HTML is required. Styling is not required.
 */?>
<!Doctype html>
    <html>
    <head>
        <title>
            2. Most Frequent Tag
        </title>
    </head>
<body>
    <form action="" method="get">
        <label for="tags">Enter tags: </label>
        <input type="text" name="tags"/>
        <input type="submit" value="Submit"/>
    </form>

    <?php if(isset($_GET['tags']) && $_GET['tags'] != ''): ?>

        <ul>
            <?php
                $tags = explode(', ', $_GET['tags']);
                $counts = array_count_values($tags); //Counts all the values of an array.
                arsort($counts);
            ?>

            <?php foreach($counts as $key => $value): ?>
                <li><?= htmlentities($key) ?> : <?= htmlentities($value) ?> times</li>
            <?php endforeach ?>

            <?php reset($counts); ?>
        </ul>

        <p>Most Frequent tag is: <?= htmlentities(key($counts)) ?></p>
    <?php endif ?>
    </body>
</html>

<?
/*
 * 1- array_count_values() = returns an array using the values of array as keys and their frequency in array as values.
 * Throws E_WARNING for every element which is not string or integer.
 * <?php
        $array = array(1, "hello", 1, "world", "hello");
        print_r(array_count_values($array));
   ?>
output:
Array
(
    [1] => 2
    [hello] => 2
    [world] => 1
)
 *
 * 2- arsort = Sort an array in reverse order and maintain index association. Returns TRUE on success or FALSE on failure.
 * 3- reset = reset — Set the internal pointer of an array to its first element.
 * reset() rewinds array's internal pointer to the first element and returns the value of the first array element.
 * 4- key() =  Fetch a key from an array. key() returns the index element of the current array position.
 * The key() function simply returns the key of the array element that's currently being pointed to by the internal pointer.
 * It does not move the pointer in any way. If the internal pointer points beyond the end of the elements list or the array is empty, key() returns NULL.
 * */
?>