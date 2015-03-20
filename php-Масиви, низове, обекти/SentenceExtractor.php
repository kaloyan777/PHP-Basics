<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sentence Extractor</title>
</head>
<body>
<main>
    <form>
        <textarea name="text"></textarea>
        <label for="word">Word:</label>
        <input type="text" name="word" id="word">
        <input type="submit" value="Extract">
    </form>
    <?php
    if (isset( $_GET[ 'text' ], $_GET[ 'word' ] ) &&
        !empty( $_GET[ 'text' ] ) && !empty( $_GET[ 'word' ] )):
        $sentences = [];
        preg_match_all( "/\s*[^.!?]+[.!?]/", $_GET[ 'text' ], $sentences );
        $validSentences = array_filter( $sentences[ 0 ], function( $val )
        {
            $word = $_GET[ 'word' ];
            return strlen( $val ) && preg_match( "/\b$word\b/i", $val );
        });
        foreach ($validSentences as $sentence): ?>
            <p><?= htmlentities( $sentence ) ?></p>
        <?php endforeach; ?>
    <?php endif; ?>
</main>
</body>
</html>
<?
/*
 * Всички задачи са добре изпълнени, освен първата.
 * Output - а е грешен. Масива $words не ти трябва,
 * защото това, което прави foreach - а на 6 - ти ред,
 * е да слага ключове на масива от 0 до броя на думите.
 * Затова после в output - а излизат не думите, а числа.
 * Може да ползваш масива $allWords, да направиш един for, който да смалява буквите:
 * for($i = 0; $i < count($allWords); $i++) $allWords[$i] = strtolower($allWords[$i]);
 * и да ползваш една много магическа функция array_count_values(), която връща асоциатиен масив,
 * в който ключовете са думите (без дупликати), а стойностите са броя на съответната дума.
 * И после на 25 - ти ред само променяш <?php if (isset( $words )): ?>
 * на <?php if (isset( $allWords )): ?> и на 28 - ме ред променяш <?php foreach ($words as $word => $count): ?>
 * с <?php foreach ($allWords as $word => $count): ?> и се готов/а.
 * */
?>