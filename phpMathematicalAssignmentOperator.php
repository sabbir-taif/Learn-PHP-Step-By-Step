<?php

// Operation:	  Long Syntax:	    Short Syntax:
// Add	        $x = $x + $y	      $x += $y
// Subtract	    $x = $x - $y	      $x -= $y
// Multiply	    $x = $x * $y	      $x *= $y
// Divide	      $x = $x / $y	      $x /= $y
// Mod	        $x = $x % $y	      $x %= $y


// Q: 1

/* We’re going to do a mathematical “magic” trick. Create a variable, $my_num and assign as its value any number.
 Next, create a second variable, $answer and assign $my_num as its value.
*/

  $my_num = 28;

  $answer = $my_num;


// Q: 2

/* Use the addition assignment operator to add 2 to $answer.
*/

  $answer += 2;

// Q: 3

/* Use the multiplication assignment operator to multiply $answer by 2.
*/

  $answer *= 2;

// Q: 4

/* Use the subtraction assignment operator to subtract 2 from $answer.
*/

  $answer -= 2;

// Q: 5

/* Use the division assignment operator to divide $answer by 2.
*/

  $answer /= 2;

// Q: 6

/* Almost there. Use the subtraction assignment operator to subtract your original number ($my_num) from $answer. Finally, use echo to print $answer to the terminal.

If everything went as it should, $answer should be 1. No matter what your original number was! Don’t believe us? Go ahead try it with a different number for the value of $my_num.
*/

  $answer -= $my_num;

  echo $answer;


?>