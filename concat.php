<?php

$name = 'John';
$age = 25;

// Concatenation
$txt = 'My name is ' . $name . ' and I am ' . $age . ' years old.';
echo $name . ' is ' . $age . ' years old.' . '<br>';
echo "$name is $age years old." . '<br>'; // Double quotes allow for variables to be parsed

$new_txt = 'Hello. ';
$new_txt .= $txt; // Append to the end of the string
