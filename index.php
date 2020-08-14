<?php
include_once 'Point.php';
include_once 'Moveablepoint.php';

$point = new Point(10,20);
echo $point;
echo '<br>';

$moveablepoint = new Moveablepoint(10,20,5,5);
$moveablepoint->move();
echo $moveablepoint;