<?php

$expression = true;
$expression_2 = false;

// Simple conditional
if ($expression) {
    echo "It was true";
}

// Alternative syntax
if ($expression) :
    echo "It was true";
endif;

/* 
* <body>
*   <?php if (true) : ?>
*   <h1>It was true</h1>
*   <?php endif; ?>
* </body>
*/

// Doble conditional
if ($expression) {
    echo "It was true";
} else {
    echo "It was false";
}

// Alternative syntax
if ($expression) :
    echo "It was true";
else :
    echo "It was false";
endif;

// Ternary operator
echo $expression ? "It was true" : "It was false";

// Multiple conditions
if ($expression) {
    echo "It was true";
} elseif ($expression_2) { // elseif is the same as else if
    echo "It was false";
} else if ($expression_2) {
    echo "It was false";
} else {
    echo "It was something else";
}

// Alternative syntax
if ($expression) :
    echo "It was true";
elseif ($expression_2) :
    echo "It was false";
elseif ($expression_2) : // In this case you can only use elseif
    echo "It was false";
else :
    echo "It was something else";
endif;

// Conditional structures can be nested
if ($expression) {
    if ($expression_2) {
        echo "It was true";
    } else if ($expression_2) {
        echo "It was false";
    } else {
        echo "It was false";
    }
} else {
    echo "It was false";
}

// Alternative syntax
if ($expression) :
    if ($expression_2) :
        echo "It was true";
    elseif ($expression_2) :
        echo "It was false";
    else :
        echo "It was false";
    endif;
else :
    echo "It was false";
endif;
