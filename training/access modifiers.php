<?php

namespace AccessModifiers;

class Vehicle 
{
    public $model;
    public $color;
    public $year;

    public function Run() {
        echo " -- Run -- ";
    }

    public function Stop() {
        echo " -- Stop -- ";
    }
}

$vehicle = new Vehicle();
$vehicle->model = "HILUX";
echo $vehicle->model;
$vehicle->Run();
$vehicle->Stop();

