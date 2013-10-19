<?php
require_once 'Invetory.php';

$inventory = new Invetory();

$sales = array(5);
$daysAvailable = array(15);
$result = $inventory->monthlyOrder($sales, $daysAvailable);
echo $result . "\n";

$sales = array(75,120,0,93);
$daysAvailable = array(24,30,0,30);
$result = $inventory->monthlyOrder($sales, $daysAvailable);
echo $result . "\n";

$sales = array(8773);
$daysAvailable = array(16);
$result = $inventory->monthlyOrder($sales, $daysAvailable);
echo $result . "\n";

$sales = array(1115,7264,3206,6868,7301);
$daysAvailable = array(1,3,9,4,18);
$result = $inventory->monthlyOrder($sales, $daysAvailable);
echo $result . "\n";