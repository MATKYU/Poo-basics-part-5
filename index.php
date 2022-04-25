<?php

// La Base 

require_once 'bicycle.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'skateboard.php';
require_once 'car.php';
require_once 'truck.php';

// ------------------------------------------------------------------------------------------ 


// First step Part 2 
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

// ------------------------------------------------------------------------------------------ 

// New part 
$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);


var_dump(Car::ALLOWED_ENERGIES);

// ------------------------------------------------------------------------------------------ 

// Trucks
$truck = new Truck(50, 'Red', 2, 'Gazole');
var_dump($truck);
echo $truck->CapFull();

$truck = new Truck(300, 'Blue', 2, 'Gazole');
var_dump($truck);
$truck->setCapStock(300);
echo $truck->CapFull() . "<br>";

// ------------------------------------------------------------------------------------------ 

// Moving truck
$truck->getcurrentSpeed = 10;

echo $truck->forward();
echo '<br> Vitesse du camion : ' . $truck->getcurrentSpeed . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du camion : ' . $truck->getcurrentSpeed . ' km/h' . '<br>';
echo $truck->brake();

// ------------------------------------------------------------------------------------------ 

// try the abstract condition
$tesla = new Car('Red', 4, 'electric');
$a11 = new MotorWay(4, 130);
$a11->addVehicle($tesla);
$a11->addVehicle($truck);
// var_dump($a11);
//Ca marche pas c'est normal :)

// ------------------------------------------------------------------------------------------ 

$skateboard = new Skateboard('red', 0);
$bike = new Bicycle('bleuchou', 1);
$a11->addVehicle($bike);
$a11->addVehicle($skateboard);
var_dump($a11);

$boulevard = new PedestrianWay(2, 50);
$boulevard->addVehicle($bike);
$boulevard->addVehicle($truck);
$boulevard->addVehicle($skateboard);
var_dump($boulevard);

$d56 = new ResidentialWay(1, 10);
$d56->addVehicle($bike);
$d56->addVehicle($truck);
$d56->addVehicle($skateboard);
$d56->addVehicle($car);

var_dump($d56);

// ------------------------------------------------------------------------------------------
$hasParkBrake = true;

try {
    $car->start();
} catch (Exception $e) {
    if ($e->getMessage() === 'Le frein à main est actif !') {
        $car->setHasParkBrake(false);
    }
} finally {
    echo 'Ma voiture roule comme un Donuts' . PHP_EOL;
}
