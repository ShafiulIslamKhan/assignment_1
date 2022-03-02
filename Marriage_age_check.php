<?php

//User inputs

$gender = 'male';
$age = 13;

// Logical breakdown

switch($gender){
	case 'male' :
		if($age >= 20) echo "<h1 style=\"color:green; text-align:center\">You can marry</h1>";
			else echo "<h1 style=\"color:red; text-align:center\">You can't marry</h1>";
		break;
	case 'female' :
			if($age >= 18) echo "<h1 style=\"color:green; text-align:center\">You can marry</h1>";
			else echo "<h1 style=\"color:red; text-align:center\">You can't marry</h1>";
		break;
}

 