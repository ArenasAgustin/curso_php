<?php

$variable = 1;

// While loop
while ($variable <= 10) {
    echo $variable . "<br>";
    $variable++;
}

// Alternative syntax
while ($variable >= 0) :
    echo $variable . "<br>";
    $variable--;
endwhile;

// Do while loop
do {
    echo $variable . "<br>";
    $variable++;
} while ($variable <= 10);

// For loop
for ($i = 0; $i <= 10; $i++) {
    echo $i . "<br>";
}

// Alternative syntax
for ($i = 10; $i >= 0; $i--) :
    echo $i . "<br>";
endfor;

// Foreach loop
$names = array("John", "Jane", "Jack", "Jill");
$names_2 = array("John" => 1, "Jane" => 2, "Jack" => 3, "Jill" => 4);

foreach ($names as $name) {
    echo $name . "<br>";
}

// Alternative syntax
foreach ($names as $name) :
    echo $name . "<br>";
endforeach;

// Foreach loop with key
foreach ($names_2 as $name => $value) {
    echo $name . " is number " . $value . "<br>";
}

// Alternative syntax
foreach ($names_2 as $name => $value) :
    echo $name . " is number " . $value . "<br>";
endforeach;

// Break
$value = 0;
$names = array("John", "Jane", "Jack", "Jill");

while ($value <= 10) {
    echo $value . "<br>";
    if ($value == 5) {
        break;
    }
    $value++;
}

foreach ($names as $name) {
    echo $name . "<br>";
    if ($name == "Jack") {
        break;
    }
}

// Continue
$value = 0;
$names = array("John", "Jane", "Jack", "Jill");

while ($value <= 10) {
    if ($value == 5) {
        $value++;
        continue;
    }
    echo $value . "<br>";
    $value++;
}

foreach ($names as $name) {
    if ($name == "Jack") {
        continue;
    }
    echo $name . "<br>";
}
