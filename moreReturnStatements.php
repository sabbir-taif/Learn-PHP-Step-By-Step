<?php
/*
More on Return Statements

The return keyword immediately stops a function. This means that any code after a return won’t run.

Let’s compare two different functions: announceRunning() and announceRunning2(). The first of these is defined as follows:
*/

function announceRunning()
{
  echo "The first function is running!\n";
  return "This is the return value of the first function.";
}
 
$first_result = announceRunning();
echo $first_result;

/*
Let’s walk through the code above:

We defined the function announceRunning().
Next, we defined the variable $first_result and assigned as its value the result of invoking the announceRunning() function. This actually did two things. It executed the function causing "The first function is running!\n" to be printed. It also assigned "This is the return value of the first function." to $first_result.
Finally, we printed $first_result.
That seemed to work as expected. In our terminal we saw:
*/

// The first function is running!
// This is the return value of the first function.

/*
Let’s contrast that to the following example:
*/
function announceRunning2()
{
  return "This is the return value of the second function.";
  echo "P.S., I love you";
}
 
$second_result = announceRunning2();
echo $second_result;

/*
In this example, the string "P.S., I love you" will never be printed! As soon as the return statement is reached, the function will end. So in the terminal, we’d see this output:

This is the return value of the second function.

Let’s use this new knowledge to fix some broken code!
/*

/*
1.
Run the code to see its current output.

// Code: 

function notFound()
{
  return 404;
  echo "ERROR: Page not found!\n";
}

function greetLearner()
{
  return "<3";
  echo "Hello, Learner!\n";
  echo "I hope you're (still) enjoying PHP!\n";
  echo "Love, Codecademy\n";
}

// Don't change the code below:

$error = notFound(); 
$heart = greetLearner();

echo "I received a $error, but it's ok because I also received $heart.";

*/

// 1.

// Output: I received a 404, but it's ok because I also received <3.


/*
2.
The notFound() function should print the string "ERROR: Page not found!\n" and return 404. Fix the notFound() function so that it works as intended.
*/

// 2. 

function notFound()
{
  echo "ERROR: Page not found!\n";
  return 404;
  
}

/*
3.
Great work! The greetLearner() function also isn’t quite right… We’d like all three of those echo statements to execute and the function to return "<3". Help!
*/

// 3.
function greetLearner()
{
   echo "Hello, Learner!\n";
  echo "I hope you're (still) enjoying PHP!\n";
  echo "Love, PHP\n";
  return "<3";
 
}

$error = notFound(); // prints: ERROR: Page not found!
$heart = greetLearner(); 
// prints: Hello, Learner!
// I hope you're (still) enjoying PHP!
// Love, PHP

echo "I received a $error, but it's ok because I also received $heart.";

// Output: I received a 404, but it's ok because I also received <3.

?>