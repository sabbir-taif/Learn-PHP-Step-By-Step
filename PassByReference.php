<?php

/*
Pass By Reference

We can invoke functions with variables or with values directly. When we invoke a function with a variable as its argument, it’s as if we’re assigning the value held by that variable to the function’s parameter. We assign a copy of the value held by the argument variable. The variable argument and the parameter are distinct entities; changes made inside the function to the parameter will not affect the variable that was passed in:
*/

function addX ($param)
{
  $param = $param . "X";
  echo $param;
};
$word = "Hello";
addX($word); // Prints: HelloX
echo $word; // Prints: Hello

/*
Let’s walk through the code above:

We defined a function addX() which reassigns $param to its previous value appended with "X".
We defined the variable $word and assigned it the value "Hello".
We invoked addX() with $word as its argument.
During the function invocation, $param was reassigned and the function printed "HelloX".
When we printed $word after the function was invoked, it remained its original value: "Hello".
If we do want to make permanent changes to a variable within a function, we can prepend the parameter name with the reference sign (&). In this way, we assign the parameter to be an alias for the argument variable. Both will refer to the same spot in memory, and changes to the parameter within the function will permanently affect the argument variable.
*/

function addXPermanently (&$param)
{
  $param = $param . "X";
  echo $param;
};
$word = "Hello";
addXPermanently($word); // Prints: HelloX
echo $word; // Prints: HelloX

/*
In the addXPermanently() function we made $param a reference to the argument. When we invoked the function with $word the changes made to $param permanently affected the $word variable. 

Let’s practice!

1.
Create a function convertToQuestion(). It should take a reference to a string variable as its argument. The function should prepend the string with "Do you think " and it should add a question mark (?) and new line character (\n) to the end of the string. So the string "no" would become "Do you think no?\n"

$example = "I'm nice";
 
convertToQuestion($example);
 
echo $example; // Should print: Do you think I'm nice?
*/

function convertToQuestion(&$get) {
  $get = "Do you think " . $get . "?" . "\n";
  return $get;
}

$perfect = "I am disturbing you";

convertToQuestion($perfect);

/*
2.
Great job! Let’s test your function to make sure it’s working properly. We’ve provided you with three variables $string_one, $string_two, and $string_three. Invoke your function three times—once with each of the three variables.
*/

$string_one = "you have teeth";
$string_two = "toads are nice";
$string_three = "brown is my favorite color";


convertToQuestion($string_one);
convertToQuestion($string_two);
convertToQuestion($string_three);

/*
3.
At the bottom of your code, use echo to print each of the string variables to confirm that their value has been permanently changed.
*/

echo $perfect; // prints: Do you think I am disturbing you?
echo $string_one; // prints: Do you think you have teeth?
echo $string_two; // prints: Do you think toads are nice?
echo $string_three; // prints: Do you think brown is my favorite color?

?>