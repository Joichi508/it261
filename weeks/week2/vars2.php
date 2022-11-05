<?php

$name = 'J0';
$first_name = 'Joichiro';
$last_name = 'Ueno';
echo $name;

echo '<br>';

$color = 'red';
echo $color;

echo '<br>';
echo 'Jo\s favorite color is '.$color.' ' ;

echo '<br>';
$x = 20;
$y = 5;
$z = $x + $y;
echo $z;

echo '<br>';
$x = 20;
$x += 5;
echo $x;

echo '<br>';
$x = 100;
$x /= 10;
echo $x;

echo '<br>';
echo '<h3>Our product, quantity and tax exercise</h3>';
$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *=1.097;
echo $total; 
echo '<h3>We would like our amount to reflect 2 decial places -- we are thinking about floats 
and a new</h3>';

$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *=1.105;
$total_friendly = number_format($total, 2);
echo 'We have a total of <b> $' .$total_friendly.'</b> dollars';
echo '<br>';
$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *=1.105;
