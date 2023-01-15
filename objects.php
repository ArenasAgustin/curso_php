<?php

// Object
class Person
{
    public $name;
    public $age;
}

$person1 = new Person();
$person1->name = 'John Doe';
$person1->age = 25;

// PRINT THE OBJECT
var_dump($person1);