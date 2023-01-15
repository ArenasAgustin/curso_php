<?php

$text = 'Hello World';

$new_variable_1 = $text; // Copy the value of the variable
$new_variable_2 = &$text; // Reference the variable

echo $new_variable_1 . ' ' . $new_variable_2 . '<br>';

$text = 'Goodbye World';

echo $new_variable_1 . ' ' . $new_variable_2 . '<br>';