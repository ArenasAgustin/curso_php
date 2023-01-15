<?php

// Switch conditional
$fruit = "apple";

switch ($fruit) {
    case "apple":
        echo "It's an apple";
        break;
    case "orange":
    case "banana":
        echo "It's an orange or banana";
        break;
    default:
        echo "It's something else";
        break;
}

// Match conditional (PHP 8) - look at the type of data
$fruit = "apple";

echo match ($fruit) {
    "apple" => "It's an apple",
    "orange", "banana" => "It's an orange or banana", // You can use multiple values
    default => "It's something else",
};

$age = 18;

echo match (true) {
    $age >= 60 => "You are a senior",
    $age >= 30 => "You are an adult",
    $age >= 18 => "You are an young adult",
    default => "You are a minor",
};