<?php

/*
Variable Parsing

In the last exercise, we saw how concatenating a number of strings and string variables got annoying. There’s an easier way!

PHP strings allow us to place variables directly into double quoted strings. These variables will be parsed which means the computer will read the variables as the value they hold rather than see them as just a sequence of characters.
*/
$dog_name = "Tadpole";
$favorite_food = "salmon";
$color = "brown";
 
echo "I have a $color dog named $dog_name and her favorite food is $favorite_food."; // Prints: I have a brown dog named Tadpole and her favorite food is salmon.

/*
PHP string parsing is incredibly useful. Whenever PHP sees a dollar sign ($) inside a string it will assume all the characters next to it (until it reaches a character that couldn’t be included in a variable name) are a part of the variable name.

Sometimes this can get complicated. Consider the following example:
*/

$toy = "frisbee";
echo "Alex likes playing with $toys";

/*
The code above will cause an error. Why? The computer was looking for a variable $toys and couldn’t find one.

Fear not! PHP allows us to specifically indicate the variable name by wrapping it in curly braces to avoid any confusion. We’ll include the dollar sign followed by the variable name wrapped in curly braces:
*/

$dog_name = "Tadpole";
$favorite_food = "treat";
$color = "brown";
 
echo "I have a ${color}ish dog named $dog_name and her favorite food is ${favorite_food}s."; // Prints: I have a brownish dog named Tadpole and her favorite food is treats.

/*
Let’s have PHP do some variable parsing for us!

Instructions

1.
We’re going to write a silly sentence PHP program. There are a number of variables assigned the string ‘___’. Replace each of them with words of the designated type.
*/

// Fill in the blanks in the code below:
$noun = "___";
$adjective = "___";
$verb = "___";

echo "The world's most beloved ___ was very ___ and loved to ___ every single day.";

// Solution

// Fill in the blanks in the code below:
  $noun = "person";
  $adjective = "humble";
  $verb = "work";

/*
2.
Beneath the three variables, there’s an echo statement with three blanks (___) in it. Replace those blanks with the three variables (in the order they were declared). Look above.
*/

echo "The world's most beloved $noun was very $adjective and loved to $verb every single day.";

/*
3.
At the end of the program, there’s a commented out line of code. We commented it out because it wasn’t working properly. Fix the line of code and uncomment it.
*/

//Fix the code below and uncomment it:

 // echo "\nI have always been obsessed with $nouns. I'm $adjectiveish. I'm always $verbing.";

 // Solution

 echo "\nI have always been obsessed with ${noun}s. I'm ${adjective}ish. I'm always ${verb}ing.";
?>