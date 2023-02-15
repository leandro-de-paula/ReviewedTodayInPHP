<?php

namespace Heritage;

class Vehicle
{
    public $model;
    public $color;
    public $year;

    public function Run() {
        echo " -- Run -- ";
    }

    public function Stop()
    {
        echo " -- Stop -- ";
    }
}

class Car extends Vehicle 
{
    public function AirConditioning() {
        echo "Turn on air conditioning";
    }
}
class Motorbike extends Vehicle 
{
    public function DarGrau() {
        echo "Dar Grau";
    }
}

$car = new Car();
$car->model = "HILUX";
$car->color = "Preto";
$car->year = "2023";
$car->Run();
$car->Stop();
$car->AirConditioning();
echo "<pre>";
var_dump($car);
echo "</pre>";

$motorbike = new Motorbike();
$motorbike->model = "R1";
$motorbike->color = "Preta";
$motorbike->year = "2023";
$motorbike->Run();
$motorbike->Stop();
$motorbike->DarGrau();
echo "<pre>";
var_dump($motorbike);
echo "</pre>";
