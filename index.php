<?php

require_once 'Bicycle.php';
require_once 'car.php';

$bike = new Bicycle('blue',0);

$car = new Car('green',5,'regular');

echo $car->start();
echo $car->forward();
echo $car->brake();