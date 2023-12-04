<?php

// TODO refactoriser le code pour respecter le principe OCP de la programmation SOLID

class Vehicle 
{
    public function run(){}
}

class Motorcycle extends Vehicle
{
    
}

class Car extends Vehicle
{
    
}

class Driver 
{
    public function drive(Vehicle $vehicle)
    {
        if ($vehicle instanceof Motorcycle) {
            $this->turnOnMotorcycle();
        }       
        
        if ($vehicle instanceof Car) {
            $this->turnOnCar();
        }
        
        $vehicle->run();
    }
    
    private function turnOnCar()
    {
        echo 'Turning on the car';
    }
    
    private function turnOnMotorcycle()
    {
        echo 'Turning on the motorcycle';
    }
}