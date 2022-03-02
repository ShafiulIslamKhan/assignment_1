<?php

// Student data
$name = 'Maruf';
$marks = 0;

// Grade calculator using if else statement / conditional operator

if($marks > 100 || $marks < 0){
    echo "<h1 style=\"color:red; text-align:center\">Invalid Result</h1>";
} 
else if($marks == 100){
    echo "<h1 style=\"color:yellow; text-align:center;\">{$name} Graded with A*</h1>";
} 
else if($marks >= 80){
    echo "<h1 style=\"color:green; text-align:center\">{$name}Graded with A</h1>";
} 
else if($marks >= 70){
    echo "<h1 style=\"color:purple; text-align:center\">{$name}Graded with B</h1>";
} 
else if($marks >= 60){
    echo "<h1 style=\"color:blue; text-align:center\">{$name}Graded with C</h1>";
} 
else if($marks >= 45 && $marks < 60){
    echo "<h1 style=\"color:black; text-align:center\">{$name} Passed</h1>";
} 
else if($marks < 45){
    echo "<h1 style=\"color: red; text-align:center\">You Failed</h1>";
} 

?>