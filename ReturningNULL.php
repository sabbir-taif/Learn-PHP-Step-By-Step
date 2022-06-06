<?php

/*
Returning NULL

What about functions without return statements? Any function without a return returns a special value NULL. NULL is a special data type that stands for the absence of a value.
*/

function returnNothing() 
{
  echo "I'm running! I'm running!\n";
}
 
$result = returnNothing(); // Prints: I'm running! I'm running!
 
echo $result; // Nothing is printed

/*
Let’s walk through the code above:

We defined a function returnNothing()— the returnNothing() function prints "I'm running! I'm running!\n" but has no return statement.

We defined the variable $result and assigned it the value returned when we invoke returnNothing().

Since we invoked the function, I'm running! I'm running! is printed.

Because the function does not have a return statement, the value assigned to $result is NULL

Finally, we print the $result variable, but, since its value is NULL, nothing is printed.

Let’s play around with NULL!
*/


/*
1.
Write a function createVacuum() which returns nothing.
*/

// 1.
  
function createVacuum() {

}

/*
2.
NULL can be really quirky. You don’t need to worry about the details now. But, just for fun, uncomment the line we provided at the bottom of the code. Predict what it will output to the terminal. When you have a guess, run the code to see.

//echo createVacuum() * 10;

*/

echo createVacuum() * 10; //prints: 0


/*
NULL can sometimes act like 0 - like it does in the example we showed above… other times it won’t.
*/

echo NULL * 3; // Prints: 0
echo NULL . "!"; // Prints: !

/*
Don’t worry if NULL doesn’t feel super clear to you right now. It’s weird!
*/

?>