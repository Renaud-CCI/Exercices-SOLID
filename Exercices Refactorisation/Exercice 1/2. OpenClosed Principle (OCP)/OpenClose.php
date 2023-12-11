<?php

// TODO refactoriser le code pour respecter le principe OCP de la programmation SOLID

abstract class Vehicle 
{
    public function run(){}

    public function fuel (){}
}

class Motorcycle extends Vehicle
{
    public function turnOn()
    {
        echo 'Turning on the motorcycle';
    }
}

class Car extends Vehicle
{
    public function turnOn()
    {
        echo 'Turning on the car';
    }
}

class Driver 
{
    public function drive(Vehicle $vehicle)
    {
        $vehicle->turnOn();
        
        $vehicle->run();
    }
}