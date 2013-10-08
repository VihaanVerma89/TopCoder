<?php
require_once("FormatAmount.php");

$fa = new FormatAmt();

$dollarNotation = $fa->amount("123456", "0");
echo "\n". $dollarNotation;

$dollarNotation = $fa->amount("49734321", "9");
echo "\n". $dollarNotation;

$dollarNotation = $fa->amount("00", "99");
echo "\n". $dollarNotation;

$dollarNotation = $fa->amount("249", "30");
echo "\n". $dollarNotation;

$dollarNotation = $fa->amount("1000", "1");
echo "\n". $dollarNotation;