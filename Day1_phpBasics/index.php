<?php
// OUTPUT
echo "Hello, Khalid! Welcome to PHP Backend Journey!<br>";
print "Let's begin Day 1 🚀<br><br>";

// VARIABLES
$name = "Khalid";
$age = 21;
$isLearning = true;
$gpa = 3.8;

// OUTPUT VARIABLES
echo "Name: $name <br>";
echo "Age: $age <br>";
echo "Learning PHP? " . ($isLearning ? "Yes" : "No") . "<br>";
echo "GPA: $gpa <br><br>";

// DATA TYPES
var_dump($name);   // string
var_dump($age);    // integer
var_dump($isLearning); // boolean
var_dump($gpa);    // float
echo "<br>";

// OPERATORS
$a = 10;
$b = 3;
echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";

?>
