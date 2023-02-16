<?php

namespace Polymorphism;

class Animal
{
    public function walk() {
        echo "The animal walked";
    }
}

class Horse extends Animal
{
    public function walkTwo(){
        echo "The horse worked";
    }
}

$animal = new Horse();
echo $animal->walk();
