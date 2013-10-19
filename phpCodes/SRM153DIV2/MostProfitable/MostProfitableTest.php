<?php
require_once("MostProfitable.php");

$mostProfitable = new MostProfitable();

$costs = array(100,120,150,1000);
$prices = array(110,110,200,2000);
$sales = array(20,100,50,3);
$items = array("Video Card","256M Mem","CPU/Mobo combo","Complete machine");
$result = $mostProfitable->bestItem($costs, $prices, $sales, $items);
echo  $result . "\n";

$costs = array(100);
$prices = array(100);
$sales = array(134);
$items = array("Service, at cost");
$result = $mostProfitable->bestItem($costs, $prices, $sales, $items);
echo  $result . "\n";

$costs = array(38, 24);
$prices = array(37, 23);
$sales = array(1000, 643);
$items = array("Letter", "PostCard");
$result = $mostProfitable->bestItem($costs, $prices, $sales, $items);
echo  $result . "\n";

$costs = array(10, 10);
$prices = array(11, 12);
$sales = array(2, 1);
$items = array("A", "B");
$result = $mostProfitable->bestItem($costs, $prices, $sales, $items);
echo  $result . "\n";