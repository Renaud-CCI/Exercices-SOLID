<?php

namespace OCPViolation;

class GasStation
{

    public function putGasInVehicle(VehicleInterface $vehicle)
    {
        $vehicle->putGasIn();
    }

}

interface VehicleInterface
{
    public function setTank($tank);
    public function putGasIn();
}
class Vehicle implements VehicleInterface
{
    protected $tank;

    public function setTank($tank)
    {
        $this->tank = $tank;
    }
    public function putGasIn(){}
}

class Car extends Vehicle
{
    public function putGasIn()
    {
        $this->setTank(50);
    }
}

class Motorcycle extends Vehicle
{
    public function putGasIn()
    {
        $this->setTank(20);
    }
}