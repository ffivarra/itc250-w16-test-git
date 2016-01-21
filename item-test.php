<?php

//item-test.php

/*
This serves as a resource for our second group project
*/

include 'Item.php';

$items[] = new Item('Burrito', 'Includes awesome sauce!', 29.99);
$items[] = new Item('Torta', 'Includes chile verde!', 59.99);
$items[] = new Item('Fried Ice Cream', 'Includes free sprinkles!', 9.99);

echo '<pre>';
var_dump($items);
echo '</pre>';