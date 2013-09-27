<?php
require_once("BigBurger.php");

$bb = new BigBurger();

$arrivalTimes = array(3,3,9);
$serviceTimes = array(2,15,14);
$result = $bb->maxWait($arrivalTimes, $serviceTimes);
echo 'Max waiting time: ' . $result;

$arrivalTimes = array(182);
$serviceTimes = array(11);
$result = $bb->maxWait($arrivalTimes, $serviceTimes);
echo "\nMax waiting time: " . $result;

$arrivalTimes = array(2,10,11);
$serviceTimes = array(3,4,3);
$result = $bb->maxWait($arrivalTimes, $serviceTimes);
echo "\nMax waiting time: " . $result;

$arrivalTimes = array(2,10,12);
$serviceTimes = array(15,1,15);
$result = $bb->maxWait($arrivalTimes, $serviceTimes);
echo "\nMax waiting time: " . $result;
