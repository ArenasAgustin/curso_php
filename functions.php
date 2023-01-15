<?php

// Create a function
function hello_world($name)
{
    return 'Hello World, I`m ' . $name . '!<br>';
}

$john_doe = 'John Doe';

echo hello_world('John Doe');
echo hello_world($john_doe);
echo hello_world($name = 'John Doe');

function add($a, $b)
{
    return $a + $b;
}

// Created a functions
$john_doe = 'John Doe';

$name_lower = strtolower($john_doe); // john doe
$name_upper = strtoupper($john_doe); // JOHN DOE
$name_capitalize = ucfirst($name_lower); // John doe
$name_capitalize_all = ucwords($name_lower); // John Doe
$str_len = strlen($john_doe); // 8
$word = str_word_count($john_doe); // 2
$replace = str_replace('John', 'Jane', $john_doe); // Jane Doe

$date_1 = '2023/1/10';

$array_date = explode('/', $date_1); // Array ( [0] => 2023 [1] => 1 [2] => 10 )
$implode_date = implode('-', $array_date); // 2023-1-10