<?php

/*
Return Statements
As we build more complicated functions, we’ll often be using them to process data. In order for the data to be useful, functions have the ability to return a value in addition to performing instructions. Let’s look at an example:
*/

function countdown() 
{
  echo "4, 3, 2, 1, ";
  return "blastoff!";
}

/*
When the countdown() function is invoked it will print 4, 3, 2, 1,, but what about the string "blastoff!"? This value will be returned. We have a lot of options for what to do with a returned value. For example, we could capture it in a variable:
*/

$return_value = countdown(); // Prints: 4, 3, 2, 1, 
echo $return_value; // Prints: blastoff!

/*
This example is a little silly, since we could have just printed the string within the function, but, as we continue to create more complicated functions, the ability to return a value will become extremely useful.

Let’s get some practice returning a value from a function!
*/

/*
1.
Write a function printStringReturnNumber() which prints a string and returns a number value.

2.
Capture your function’s return value in a variable named $my_num.

3.
Use echo to print your $my_num variable.
*/


// 1.
function printStringReturnNumber() {
  echo "Integer Number:";
  return "255";
};

printStringReturnNumber(); //print Integer Number:

// 2.
$my_num = printStringReturnNumber(); //print Integer Number:

// 3.
echo $my_num; //print Integer Number:255

?>