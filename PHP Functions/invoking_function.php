<?php
/*
Invoking Functions
In our last exercise, we saw that when we define a function, the instructions within the code block aren’t executed. Defining a function only tells the computer to associate a name with a set of instructions. To actually execute this code we’ll need in invoke, or call, the function. Invoking a function is the process of using a function that’s been defined. Let’s look at an example:
*/
function greetLearner()
{
  echo "Hello, Learner!\n";
  echo "I hope you're enjoying PHP!\n";
  echo "Love, Codecademy";
}
 
greetLearner(); 
/*
Prints:
Hello, Learner!
I hope you're enjoying PHP!
Love, Codecademy
*/

/*
Below the definition of our greetLearner function, we invoked the function by writing its name followed by an opening and closing parenthesis (( )). This tells the computer to grab the instructions specified in the function definition and execute them.

When referring to functions outside of code or in comments, it’s conventional to refer to them by their name followed by parentheses (eg. greetLearner()), so we’ll be doing this from now on.

Let’s define and invoke some functions!
*/


/*
1.
Define the function inflateEgo() which prints a compliment.

2.
Invoke your function!

3.
Just for kicks, edit your code so your function is invoked twice!
*/

// 1.
function inflateEgo(){
  echo "Hello, I'm Sabbir. How are you doing?";
  echo "Hello, I'm Sabbir. How are you doing? We are learning PHP";

};

// 2.
inflateEgo();

// 3.
inflateEgo();
?>