<?php
/*
 * Write a PHP script HTMLTagsCounter.php which generates an HTML form like in the example below.
 * It should contain a label, an input text field and a submit button.
 * The user enters HTML tag in the input field. If the tag is valid, the script should print “Valid HTML tag!”, and if it is invalid – “Invalid HTML Tag!”.
 * On the second line, there should be a score counter. For every valid tag entered, the score should increase by 1.
Hint: You may use sessions. Use an array to store all valid HTML5 tags.

 */

session_start(); //session_start — Start new or resume existing session
/*session_start() creates a session or resumes the current one based on a session identifier passed via a GET or POST request, or passed via a cookie.
http://php.net/manual/en/function.session-start.php*/
$tags = ['!DOCTYPE', 'a', 'abbr', 'address', 'area', 'article', 'aside', 'audio', 'b', 'base', 'bdi', 'bdo',
    'blockquote', 'body', 'br','button', 'canvas', 'caption', 'cite', 'code', 'col', 'colgroup', 'command', 'datalist',
    'dd', 'del', 'details','dfn', 'div', 'dl', 'dt', 'em', 'embed', 'fieldset', 'figcaption', 'figure', 'footer', 'form',
    'h1 - h6', 'head','header', 'hgroup', 'hr', 'html', 'i', 'iframe', 'img', 'input', 'ins', 'kbd', 'keygen', 'label',
    'legend', 'li', 'link','map', 'mark', 'menu', 'meta', 'meter', 'nav', 'noscript', 'object', 'ol', 'optgroup', 'option',
    'output', 'p', 'param', 'pre','progress', 'q', 'rp', 'rt', 'ruby', 's', 'samp', 'script', 'section', 'select', 'small',
    'source', 'span','strong', 'style', 'sub', 'summary', 'sup', 'table', 'tbody', 'td', 'textarea', 'tfoot', 'th', 'thead',
    'time', 'title','tr', 'track', 'u', 'ul', 'var', 'video', 'wbr'];
?>

<!DOCTYPE html>
    <html>
        <head>
            <title>HTML Tag Counter</title>
        </head>
    <body>
        <form action="" method="get">
            <label for="tag">ENTER HTML TAG: </label>
            <input type="text" name="tag"/>
            <input type="submit" value="Submit"/>
        </form>

        <?php
            if(isset($_GET['tag'])):
            if(!isset($_SESSION['count'])):
            $_SESSION['count']=0;
        endif;

        if(in_array($_GET['tag'], $tags)): //in_array — Checks if a value exists in an array. in_array() is case-sensitive.
            $_SESSION['count']++;
            ?>

            <p><strong>Valid HTML tag!</strong></p>
        <?php else: ?>
            <p><strong>Invalid HTML tag!</strong></p>
        <?php endif; ?>

        <p><strong>Score: <?= $_SESSION['count'] ?></strong></p>
        <?php endif ?>
    </body>
</html>