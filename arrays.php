<?php

// Scalar array 
$people = array('John', 'Jane', 'Joe');
$ids = array(1, 2, 3);
$cars = ['Honda', 'Toyota', 'Ford'];
$cars[3] = 'Chevy'; // Replace the value at index 3
$cars[] = 'BMW'; // Add to the end of the array

// Associative array
$people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
$ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];
$people['Jill'] = 42; // Add to the end of the array

// Multi-dimensional array
$cars_2 = array(
    array('Honda', 20, 10),
    array('Toyota', 30, 20),
    array('Ford', 23, 12)
);
$teacher = [
    'name' => 'John',
    'age' => 25,
    'courses' => ['PHP', 'JavaScript', 'HTML']
];
echo $teacher['courses'][1] . '<br>';


// PRINT THE DATA TYPE
echo gettype($cars_2) . '<br>';
echo var_dump($cars_2) . '<br>';

// PRINT THE ARRAY
print_r($cars_2);
//echo $cars;  This will not work
echo '<br>';

// COUNT THE NUMBER OF ITEMS IN THE ARRAY
echo count($cars_2) . '<br>';

// COUNT THE NUMBER OF ALL ITEMS IN THE ARRAY
echo count($cars_2, COUNT_RECURSIVE) . '<br>';