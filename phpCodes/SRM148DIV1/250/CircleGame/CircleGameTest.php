<?php
require_once("CircleGame.php");

$cg = new CircleGame();

$input = "KKKKKKKKKK";
$result = $cg->cardsLeft("KKKKKKKKKK");
echo "\ninput :" . $input . "\t result: " . $result  . " length: " . strlen($result);

$input = "KKKKKAQT23";
$result = $cg->cardsLeft($input);
echo "\ninput :" . $input . "\t result: " . $result  . " length: " . strlen($result);


$input = "KKKKATQ23J";
$result = $cg->cardsLeft($input);
echo "\ninput :" . $input . "\t result: " . $result  . " length: " . strlen($result);

$input = "AT68482AK6875QJ5K9573Q";
$result = $cg->cardsLeft($input);
echo "\ninput :" . $input . "\t result: " . $result  . " length: " . strlen($result);

$input = "AQK262362TKKAQ6262437892KTTJA332";
$result = $cg->cardsLeft($input);
echo "\ninput :" . $input . "\t result: " . $result  . " length: " . strlen($result);