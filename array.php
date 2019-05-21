<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
$food = ["Onion Soup", "Greek Salad", "Burger", "Sticky Toffee Cake"];
/*
Print every array element in a new line.
*/
echo "<pre>";
print_r($food);
echo "</pre>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

echo "<ul>";
echo "<li>{$food[0]}</li>";
echo "<li>{$food[1]}</li>";
echo "<li>{$food[2]}</li>";
echo "<li>{$food[3]}</li>";
echo "</ul>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/
$food_assoc = [
    "Onion Soup" => "Appetizers",
    "Greek Salad" =>  "Salads",
    "Burger" => "Main Dish",
    "Sticky Toffee Cake" => "Desserts"
];
/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

echo "Onion Soup | {$food_assoc["Onion Soup"]}<br>";
echo "Greek Salad | {$food_assoc["Greek Salad"]}<br>";
echo "Burger | {$food_assoc["Burger"]}<br>";
echo "Sticky Toffee Cake | {$food_assoc["Sticky Toffee Cake"]}";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/
$onionSoup = [
    "type" => "Appetizer",
    "origin" => "France"
];
$greekSalad = [
    "type" => "Salad",
    "origin" => "Greece"
];
$Burger = [
    "type" => "Main Dish",
    "origin" => "America"
];
$stickyToffeeCake = [
    "type" => "Dessert",
    "origin" => "UK"
];

$food_assoc = [$onionSoup, $greekSalad, $Burger, $stickyToffeeCake];
    
/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

echo "Onion Soup | {$onionSoup["type"]} | {$onionSoup["origin"]}<br>";
echo "Greek Salad | {$greekSalad["type"]} | {$greekSalad["origin"]}<br>";
echo "Burger | {$Burger["type"]} | {$Burger["origin"]}<br>";
echo "Sticky Toffee Cake | {$stickyToffeeCake["type"]} | {$stickyToffeeCake["origin"]}";



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
echo "<table>";
    echo "<tr>";
        echo "<th>Onion Soup</th>";
        echo "<th>{$onionSoup["type"]}</th>";
        echo "<th>{$onionSoup["origin"]}</th>";
    echo "</tr>";
    echo "<tr>";
        echo "<th>Greek Salad</th>";
        echo "<th>{$greekSalad["type"]}</th>";
        echo "<th>{$greekSalad["origin"]}</th>";
    echo "</tr>";
    echo "<tr>";
        echo "<th>Burger</th>";
        echo "<th>{$Burger["type"]}</th>";
        echo "<th>{$Burger["origin"]}</th>";
    echo "</tr>";
    echo "<tr>";
        echo "<th>Sticky Toffee Cake</th>";
        echo "<th>{$stickyToffeeCake["type"]}</th>";
        echo "<th>{$stickyToffeeCake["origin"]}</th>";
    echo "</tr>";
echo "</table>";

?>