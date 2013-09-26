<?php

require_once("DivisorDigits.php");

$dd = new DivisorDigits();

$number="12345";
$result = $dd->howMany($number);
echo "\nNumber: " . $number . " Result: ". $result;

$number="661232";
$result = $dd->howMany($number);
echo "\nNumber: " . $number . " Result: ". $result;

$number="52527";
$result = $dd->howMany($number);
echo "\nNumber: " . $number . " Result: ". $result;

$number="730000000";
$result = $dd->howMany($number);
echo "\nNumber: " . $number . " Result: ". $result;