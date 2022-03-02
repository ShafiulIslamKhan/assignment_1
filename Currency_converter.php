<?php

//convert 4 coutries currency to bdt

$amount_in_bdt = 1200;
$converted_currency = 'Nigerian Naira';

// logical breakdown using switch case

switch($converted_currency){
	case 'Euro' :
		echo "<h1 style=\"color:green; text-align:center\">{$amount_in_bdt} BDT = ".$amount_in_bdt * 0.010." {$converted_currency}</h1>";
	break;

	case 'Riyal' :
		echo "<h1 style=\"color:green; text-align:center\">{$amount_in_bdt} BDT = ".$amount_in_bdt * 0.044." {$converted_currency}</h1>";
	break;

	case 'Russian Ruble' :	
		echo "<h1 style=\"color:green; text-align:center\">{$amount_in_bdt} BDT = ".$amount_in_bdt * 1.26." {$converted_currency}</h1>";
	break;

	case 'Nigerian Naira':
		echo "<h1 style=\"color:green; text-align:center\">{$amount_in_bdt} BDT = ".$amount_in_bdt *  4.84." {$converted_currency}</h1>";	
	break;

	
		
}