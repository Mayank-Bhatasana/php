<!--$text = " PHP is a powerful scripting language for web development. ";-->
<!--Find the length of the string.-->
<!--Convert the string to uppercase and display the result.-->
<!--Convert the string to lowercase and display the result.-->
<!--Find the position of the word "powerful" in the string.-->
<!--Replace the word "scripting" with the word "programming".-->
<!--Extract the word "PHP" from the string.-->
<!--Reverse the string and display the result.-->
<!--Trim the leading and trailing spaces from the string.-->
<!--Repeat the string "PHP " 5 times and display the result.-->
<!--Implode the array of words ["PHP", "is", "a", "powerful", "language"] into a string, with a-->
<!--space separating each word.-->
<!--Explode the string into an array using spaces as the delimiter, and display the array.-->
<!--Shuffle the characters of the string randomly and display the result.-->
<!--Convert newlines in a string to <br> tags. Use the string "Hello\nWorld" for this task.-->

<?php

    $text = " PHP is a powerful scripting language for web development. ";
    echo strlen($text)."<br/>";
    echo strtoupper($text)."<br/>";
    echo strtolower($text)."<br/>";
    echo strpos($text, "powerful", 0)."<br/>";
    echo str_replace("scripting", "programming", $text)."<br/>";
    $ans = explode(" ", $text);
    print_r($ans);
    echo "<br/>";
    echo strrev($text)."<br/>";
    echo trim($text)."<br/>";
    echo str_repeat($text, 5)."<br/>";
    echo implode(" ",$ans)."<br/>";
    echo str_shuffle($text)."<br/>";
    echo nl2br("You call anonymously!\nThey know me, they'll know my voice.")."<br/>";
?>
