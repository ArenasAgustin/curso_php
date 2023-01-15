<?php
/* 
* Variables
* Prefix $
* Start with a letter or an underscore
*/

// DATA TYPES
// String
$name = 'John Doe';

// Integer
$integer = 1;
$integer2 = -53;

// Float
$float = 1.5;
$float2 = -63.455;

// Boolean
$false = false;
$FALSE = FALSE;
$true = true;
$true = TRUE;

// NULL
$null = null;

// PRINT THE VARIABLE
echo $name . '<br>';

// PRINT THE DATA TYPE
echo gettype($name) . '<br>';
echo var_dump($name) . '<br>';

echo gettype($integer) . '<br>';
echo var_dump($integer) . '<br>';

// CONSTANTS
define('CONSTANT1', 'Hello Everyone 1');
const CONSTANT2 = 'Hello Everyone 2';