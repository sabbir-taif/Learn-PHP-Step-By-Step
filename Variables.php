<?php

/*
Variables

Let’s say I have a really long string in my program, and I’m going to need to use it multiple times. Do I have to type the string out every time I need to use it? The answer is “no”. Variables are a fundamental programming concept designed to address this concern. With variables, we store values so that we can easily reuse them throughout a program.

Before we can use variables in our code, we need to declare and assign them.

Declaring a variable is the process of reserving a word, the variable name, which we’ll be able to refer to in our code. It’s good practice to name the variable in a way that describes the data it holds.

Assignment is the process of associating that variable name with a specific value so that everytime we use the variable’s name the computer will grab that value.
*/

/*
Creating Variables

Let’s look at an example of creating a variable:

$my_name = "Aisle Nevertell";
In the code above, we’re actually doing two things with a single statement: we’re declaring a new variable by giving it the name my_name. We’re also assigning it the value "Aisle Nevertell". The variable $my_name now holds the value "Aisle Nevertell".

To declare a variable we use the dollar sign character ($) followed by our chosen variable name. The dollar sign is known as a sigil; it’s a character that allows the computer to see quickly that something is a variable.

To assign it a value we use another operator: the assignment operator (=) followed by the value we’re assigning to the variable.

Though it can occasionally be useful to separate these actions, we’ll most often be declaring and assigning variables at the same time.


In PHP, variables names can contain numbers, letters, and underscores (_), but they have to start with either a letter or an underscore. Variable names are case sensitive, meaning that PHP will treat the variables $my_example and $My_example as two different variables.

One common convention when naming PHP variables is to use an underscore between words on variable names with more than one word in their name. This is known as snake case:

  $mood = ":)";
  $favorite_food = "Red curry with eggplant";

  Let’s create some variables!
*/
/*
Instructions
1.
Create a variable and assign to it a string value. You can give the variable any valid name you’d like and assign a string containing anything you want. End the statement with a semicolon.
*/

  $name = "My name is Sabbir Rahman";

/*
2.
Declare a variable $biography and assign to it a string that starts with a new line character and contains a sentence or two about you.
*/

$biography = "\nI love PHP very much";

/*
3.
Create a variable $favorite_food and assign to it the string "\n", "tur", "duck", and "en" concatenated together.
*/

  $favorite_food = "\n"."tur"."duck"."en";

?>