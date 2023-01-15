<?php

include 'hello_world.php'; // if the file doesn't exist it throws a warning
require 'hello_world.php'; // if the file does not exist throw an error

// Alternative syntax
include('hello_world.php');
require('hello_world.php');

// include_once and require_once are used to include a file only once
include_once 'hello_world.php';
require_once 'hello_world.php';

// Alternative syntax
include_once('functions.php');
require_once('functions.php');


echo add(1, 2);
