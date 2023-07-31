<?php


// PHP Arrays 
/*
 In PHP, Arrays are a little diferent from other languages! Arrays can be numerics, strings, bools and many kind of data like in other languages, but arrays are associatives in PHP!
 In PHP, every value in an array, come together with an auto incremented key, like an index and alternating that key we can construct JavaScript object like strucutres.
 In PHP, there isnt "objects" structures like in JavaScript, but with associative arrays we can do this structure!
*/

$array1 = array(
    "key" => "value"
);

$array2 = [
    "key" => "value"
];

$cars = ["ferrari", "bmw", "porsche"];
print_r($cars);
print_r(count($cars));
print_r($cars[2]);
echo " " . "\n";

$address = [
    "cep" => "123456789",
    "number" => "123",
    "city" => "são paulo",
    "street" => "augusta"
];
print_r($address);
print_r($address["street"]);
echo " " . "\n";

$addressPerson = [
    "cep" => "123456789",
    "number" => "123",
    "city" => "são paulo",
    "street" => "augusta",
    "person" => [
        "firstName" => "Bruno",
        "lastName" => "Pavanelli",
        "age" => 26
    ]
];
print_r($addressPerson["person"]);
print_r($addressPerson["person"]["firstName"]);
echo " " . "\n";

if (isset($addressPerson["person1"])) {
    print_r("valid key");
} else {
    print_r("invalid key");
}
echo " " . "\n";

// Increment/Decrement commands -> affect only numbers and strings
/*
 ++$a / --$a pre-increment -> incremet/decrement one and then retorn $a
 $a++ / $a-- post increment -> return $a, and then increment/decrement one 
*/
echo "-------------------" . "\n";
echo "Increment" . "\n";
$a = 5;
$b = 5;
echo "a must be 5: " . $a++ . "\n";
echo "a must be 6: " . $a . "\n";
echo "must be 6: " . ++$b . "\n";

// Loop For
/*
 In PHP every loop has to keyword to stop or desconsidered an item -> break to stop and continue to ignore
*/
echo "-------------------" . "\n";
echo "Loop for" . "\n";
for ($i=0; $i < 3; $i++) {
    echo "php papi {$i}". "\n";
}

$arrayNumbers = [0,4,7,5,6];
$arrayNumbersLength = count($arrayNumbers);

echo "Print a value of an array in every index" . "\n";
for ($i=0; $i < $arrayNumbersLength - 1; $i++) {
    var_dump($arrayNumbers[$i]);
}

// Bubble Sort Algorithm -> Ordenation with for 
for ($i=0; $i < $arrayNumbersLength - 1; $i++) {
    for ($j=0; $j < $arrayNumbersLength - $i - 1; $j++) {

        if ($arrayNumbers[$j+1] < $arrayNumbers[$j]) {
            $auxVar = $arrayNumbers[$j];
            $arrayNumbers[$j] = $arrayNumbers[$j+1];
            $arrayNumbers[$j+1] = $auxVar;
        }
    }
}

echo "ForEach" . "\n";
$arrayForEach = [1,2,3,4,5,6,7,8,9];
foreach($arrayForEach as $key => $value) {
    if ($key === count($arrayForEach) - 1) {
        break;
    }

    if ($value % 2 !== 0){
        continue;
    }

    var_dump("$key | $value");
}

// While and do While
/*
    While -> fisrt see the condition than run code
    Do While -> fisrt run code than see condition
*/

echo "While" . "\n";
$fruits = ["banana", "apple", "orange", "grape"];
$count = count($fruits);

$i = 0;
while ($i < $count) {
    echo $fruits[$i] . "\n";
    $i++;
}

echo "Do While" . "\n";
$fruits = ["banana", "apple", "orange", "grape"];
$count = count($fruits);

$i = 0;
do {
    echo $fruits[$i] . "\n";
    $i++;
} while ($i < $count);