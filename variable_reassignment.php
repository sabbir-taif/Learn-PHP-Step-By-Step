<?php

/*
Variable Reassignment

The word variable comes from the latin variāre which means “to make changeable.” This is an apt name because the value assigned to a variable can change.

The process of assigning a new value to a variable is called reassignment. We reassign a variable using the assignment operator on a variable that’s already been declared:
*/

$favorite_food = "Red curry with eggplant";
echo $favorite_food; // Prints: Red curry with eggplant
 
// Reassign the value of $favorite_food to a new string
$favorite_food = "Pizza"; 
echo $favorite_food; // Prints: Pizza

/*
It’s often useful to create new variables assigned to the same value as an existing variable:
*/

$first_player_rank = "Beginner";
$second_player_rank = $first_player_rank; 

/*
In the code above, we declared the variable $first_player_rank and assigned to it the string "Beginner". Next, we declared $second_player_rank and assigned it to $first_player_rank.

This created a new variable ($second_player_rank) assigned the value "Beginner". Notice how variables can be treated different depending on where they appear in code. During variable assignment or reassignment, the variable on the left of the assignment operator is treated as a variable (named storage for holding a value) while a variable on the right of the operator is treated as the value it stores.
*/

/*
Instructions

1.
We declared a variable $movie and assigned the string "___" to it. But that’s no fun! Beneath that declaration, reassign $movie so that it’s assigned a string containing your favorite movie from when you were a little kid.
*/

$movie = "___";

  echo "I'm a fickle person, my favorite movie used to be $movie.";
  
  echo "\nBut now my favorite is $movie.";
  
/*
2.
Below your reassignment of the $movie variable, declare and assign a new variable, $old_favorite. The $old_favorite variable should have $movie assigned to it.

3.
Between the first and second echo statements, reassign the value of $movie to a new string.

4.
Finally, at the end of the program add one last echo statement which uses PHP string parsing to print a string containing the $old_favorite variable.

*/
// Question End


// Solution

// 1.
  $movie = "Lord of the Rings";

// 2.
  $old_favorite = $movie;

// 3.

  echo "I'm a fickle person, my favorite movie used to be $movie.";

  $movie = "Harry Potter";
  
  echo "\nBut now my favorite is $movie.";

// 4.
  echo "I love ${old_favorite}s all movie series so much";
?>