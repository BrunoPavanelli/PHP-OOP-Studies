<?php

// To run in localhost: PHP -S localhost:8080

// Logical Operators and Booleans
/*

 And -> $a and $b | $a && $b
 Or -> $a or $b | $a || $b 
 -- && and || have more precedence level than "and" and "or"
 XOR -> $a xor $b exclusive or -> if both expression are true, xor return false
 denial -> !$a

*/
echo "booleans" . "\n";
$bool = true && false; // false
var_dump(($bool));

$bool = true and false; // true
var_dump($bool);

$bool = (true and false); // false
var_dump($bool);
echo "-------------------" . "\n";

echo "if else" . "\n";
$var1 = true;
$var2 = true;
$var3 = false;

if ($var1 === $var2) {
    echo "vars are equal";
} else  {
    echo "vars arent equal";
}

echo " " . "\n";
if ($var1 === $var3) {
    echo "vars are equal";
} else  {
    echo "vars arent equal";
}

echo " " . "\n";
if ($var1 === $var3) {
    echo "vars are equal";
} else if ($var1 !== $var2)  {
    echo "vars arent equal";
} else {
    echo "else statement";
}

echo " " . "\n";
echo "-- ternary sintax --" . "\n";
echo $var1 === $var2 ? "vars are equal" : "vars arent equal";

echo " " . "\n";
echo "-- switch case sintax --" . "\n";

$sort = rand(0,3);
echo "Value sorted {$sort}";
switch($sort) {
    case 0:
        echo " => 2 points";
        break;
    case 1:
        echo " => 1 point";
        break;
    case 2:
        echo " => 3 points";
        break;
    default:
        echo " => 0 points :(";
        break;     
}

echo " " . "\n";
echo "-------------------" . "\n";
echo "arrays" . "\n";
