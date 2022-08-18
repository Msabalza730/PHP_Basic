<?php

$students = array("Pepito", "Juanchito", "Kitty");
echo $students[0];

// Change a value
$students[2] = "Michael";

// Scalar
$students2 = ["Pepito", "Juanchito", "Kitty"];
echo $students2[2];

// Associative
$tutor = [
    "name" => "Mar", 
    "Lastname" => "Sabalza"
];

echo $tutor["Lastname"]; 

// Multiple
$tutor2 = [
    "name" => "Juan", 
    "Lastname" => "Perez",
    "Age" => 30,
    "courses" => ["PHP", "Laravel"]
];

echo $tutor2["courses"][0];

// To know the values
echo count($tutor2);