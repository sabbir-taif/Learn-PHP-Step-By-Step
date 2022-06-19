<?php

/*
Default Parameters

Earlier we wrote a sayCustomHello() function which took in a $name and printed a custom greeting. If we tried to invoke this function without an argument, it would cause an error; the function is designed to run with one argument, and it won’t accept fewer.
*/

function sayCustomHello($name)
{
  echo "Hello, $name!";
};
 
sayCustomHello(); // Causes an error!

/*
We can be more flexible about parameters when defining our functions. We want to print "Hello, [name passed in]!" if an argument is provided, and "Hello, old chum!" only if no argument is passed in.

We can accomplish this by providing a default value for the $name parameter:
*/

function greetFriend($name = "old chum")
{
  echo "Hello, $name!";
};
 
greetFriend("Marvin"); // Prints: Hello, Marvin!
 
greetFriend(); // Prints: Hello, old chum!

/*
In the code above, we defined the greetFriend() function. It has a parameter $name with a default value of “old chum”. We invoked the function twice:

The first time, we passed in "Marvin" as the argument. During that invocation, the function assigned "Marvin" to $name so Hello, Marvin! was printed.

The second time we invoked the function with no argument. Therefore, the default value of "old chum" was assigned to $name and Hello, old chum! was printed.

Let’s practice defining functions with default parameters.
*/



/*
1.
Write a function calculateTip() which takes a number representing the total cost of a meal as its first argument. It should also take a second, optional argument—an integer representing the percent tip desired (eg. 25 will indicate a 25% tip should be calculated). If no second argument is passed in, the function should default to a 20% tip. The function should return the new total—the previous total plus the calculated tip.

For example:

calculateTip(100, 25) should return 125
calculateTip(100) should return 120
calculateTip(65, 15) should return 74.75
*/

function calculateTip($totalCost, $percentTip = 20) {
  $tip = $totalCost * $percentTip / 100;
  $newTotal = $totalCost + $tip;
  return $newTotal;
}

/*
2.
Use echo to test your function with one and two arguments to make sure it works as expected in each case.
*/

echo calculateTip(105) . "\n";
echo calculateTip(1000, 30);

?>