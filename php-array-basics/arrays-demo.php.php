<?php
echo "Hello, World!";

$cars = array("volvo","kia","bmw");
echo $cars[0]; // Outputs "Volvo"
echo $cars[2]; // outputs "bmw"
$cars[] = " toyota ";

$fruits = array("Apple", "Banana", "Orange");

$fruits[] = "Grapes"; // Adds "Grapes" to the end of the array
$fruits[1] = "Kiwi"; // Updates the second element to "Kiwi"

unset($fruits[0]); // Removes the first element (Apple)

echo count($fruits); // Outputs the number of items in the $fruits array

//Indexed Arrays:
$fruits = array("Apple", "Banana", "Orange");
echo $fruits[1]; // Outputs "Banana"
/*Keys are integers.
Not used as maps.
Elements are accessed by their position.*/

//Associative Arrays:

$person = array (
    "name" => "John",
    "age" => 30,
    "city" => "New York");

echo $person [ "age" ]; // Outputs 30
echo $person ["city"]; // outputs new york

/*Keys can be strings or integers.
Behave like maps.
Elements are accessed by their keys.*/


?>
