<?php

namespace AccessModifiers;

ini_set("display_errors", true);
error_reporting(E_ALL);

class Vehicle 
{
    protected $model;
    public $color;
    public $year;

    public function Run() {
        echo " -- Run -- ";
    }

    public function Stop() {
        echo " -- Stop -- ";
    }

}

class Car extends Vehicle 
{
    public function onCleaner(){
        echo "Cleaner in 321";
    }
    
    public function SetModel($m) {
        $this->model = $m;
    }
    
    public function GetModel() {
        return $this->model;
    }
}

class Motorbike extends Vehicle 
{
    public function DarGrau()
    {
        echo "Dar Grau in 321";
    }    
}

$car = new Car();
$car->SetModel("HILUX");
echo $car->GetModel();
$car->Run();
$car->Stop();

echo "<pre>";
var_dump($car);
echo "</pre>";


