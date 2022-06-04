<?php

/*
1.
We’re going on a picnic. We started you off with the $sentence variable holding the value "\nI'm going on a picnic, and I'm taking apples".

Use the concatenating assignment operator (.=) to add another item to our list. The string you append should start with a comma(,) and a space followed by a word which starts with the letter “b”.

Next use echo to print the new value of $sentence.

2.
That was fun. Let’s keep playing.

This time use the concatenating assignment operator (.=) to append a string which starts with a comma(,) and a space followed by a word which starts with the letter “c”.

Use echo to print the newest value of $sentence.
*/

  echo "I'm going on a picnic!";

  $sentence = "\nI'm going on a picnic, and I'm taking apples";

  echo $sentence;

// Write your code below:

// Solution

// 1.
$sentence .= ", bananas";
echo $sentence;

// 2.
$sentence .= ", cold drinks.";
echo $sentence;

?>