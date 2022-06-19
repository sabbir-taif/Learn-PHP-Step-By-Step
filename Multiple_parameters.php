<?php

/*
Multiple Parameters

We can also define functions with multiple parameters.
*/

function divide($num_one, $num_two)
{
  return $num_one / $num_two;
};

/*
In the function above, we defined the divide() function. It takes in two number arguments and returns the result of dividing the first parameter by the second. Let’s look at how we invoke this function:
*/

echo divide(12, 3); // Prints: 4
 
echo divide(3, 12); // Prints: 0.25

/*
In the code above:

First, we printed the value returned from invoking our divide() function with 12 and 3 as arguments.

Next, we printed the value returned from invoking our divide() function with 3 and 12.

Notice that the order we pass in the arguments decides which parameters they correspond to—the first argument we pass into divide() will be assigned to $num_one and the second argument to $num_two.

Invoking a function with fewer arguments than expected will result in an error:
*/

function expectTwo($first, $second)
{
  return "whatever";
}
 
echo expectTwo("test"); // Will result in an error

/*
1.
Write a function calculateArea() that takes in two number arguments—representing the height and width of a rectangle—and returns the area of that rectangle.
*/

function calculateArea($height, $width) {
  return "Area = ".$height * $width;
}

/*
2.
Use echo to print the result of invoking your calculateArea() function with two number arguments.
*/

echo calculateArea(5,8);

/*
3.
Write a function calculateVolume() that takes in three number arguments—representing the height, width, and depth of a box—and returns the volume of that box.
*/

function calculateVolume($height, $width, $depth) {
  return "Volume = " . $height * $width * $depth;
}

/*
4.
Use echo to print the result of invoking your calculateVolume() function with three number arguments.
*/

echo calculateVolume(8,12,3);

?>