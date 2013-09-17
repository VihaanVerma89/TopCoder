<?php
require_once("Bonuses.php");

$b = new Bonuses();

$points = [1,2,3,4,5];
$allocation = $b->getDivision($points);
var_dump($allocation);


$points = [5,5,5,5,5,5];
$allocation = $b->getDivision($points);
var_dump($allocation);

$points = [485, 324, 263, 143, 470, 292, 304, 188, 100, 254, 296,
 255, 360, 231, 311, 275,  93, 463, 115, 366, 197, 470];
$allocation = $b->getDivision($points);
var_dump($allocation);