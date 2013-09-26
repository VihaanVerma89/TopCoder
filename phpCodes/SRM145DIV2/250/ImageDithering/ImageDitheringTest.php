<?php

require_once("ImageDithering.php");

$id = new ImageDithering();

$dithered = "BW";
$screen = ["AAAAAAAA", "ABWBWBWA", "AWBWBWBA", "ABWBWBWA", "AWBWBWBA", "AAAAAAAA"];
$result = $id->count($dithered, $screen);
echo "\n" .$result;

$dithered = "BW";
$screen = ["BBBBBBBB", "BBWBWBWB", "BWBWBWBB", "BBWBWBWB", "BWBWBWBB", "BBBBBBBB"];
$result = $id->count($dithered, $screen);
echo "\n" .$result;


$dithered = "ACEGIKMOQSUWY";
$screen = ["ABCDEFGHIJKLMNOPQRSTUVWXYZABCDEFGHIJKLMNOPQRSTUVWX",
"ABCDEFGHIJKLMNOPQRSTUVWXYZABCDEFGHIJKLMNOPQRSTUVWX",
"ABCDEFGHIJKLMNOPQRSTUVWXYZABCDEFGHIJKLMNOPQRSTUVWX",
"ABCDEFGHIJKLMNOPQRSTUVWXYZABCDEFGHIJKLMNOPQRSTUVWX",
"ABCDEFGHIJKLMNOPQRSTUVWXYZABCDEFGHIJKLMNOPQRSTUVWX",
"ABCDEFGHIJKLMNOPQRSTUVWXYZABCDEFGHIJKLMNOPQRSTUVWX"];
$result = $id->count($dithered, $screen);
echo "\n" .$result;