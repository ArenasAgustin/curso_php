<?php

// Arithmetic Operators 
// + - * / % **

// Assignment Operators
// = += -= *= /= %= **=

// Comparison Operators
1 == "1"; // EQUAL => true
1 === "1"; // IDENTICAL => false
1 != "1"; // NOT EQUAL => false
1 <> "1"; // NOT EQUAL => false
1 !== "1"; // NOT IDENTICAL => true
1 < "2"; // LESS THAN => true
1 > "2"; // GREATER THAN => false
1 <= "1"; // LESS THAN OR EQUAL TO => true
1 >= "1"; // GREATER THAN OR EQUAL TO => true

// Increment/Decrement Operators
// ++ --
$a = 1;
echo $a++; // 1
echo ++$a; // 3
echo $a--; // 3
echo --$a; // 1

// Logical Operators
true && true; // AND => true
true || false; // OR => true
!true; // NOT => false
true and true; // AND => true
true or false; // OR => true