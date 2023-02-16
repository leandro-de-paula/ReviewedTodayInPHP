<?php

namespace Polymorphism;

class Animal
{
    public function walk() {
        echo "The animal walked";
    }

    public function run() {
        echo "The animal ran";
    }
}

class Horse extends Animal
{
    public function walk(){
        echo "The horse worked <br>";
        $this->run();
    }
}

$animal = new Horse();
$animal->walk();
