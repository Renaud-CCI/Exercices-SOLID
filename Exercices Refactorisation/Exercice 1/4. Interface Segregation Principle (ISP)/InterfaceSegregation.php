<?php

// TODO refactoriser le code pour respecter le Principe de Ségregation des Interface de la programmation SOLID

interface Vehicle2 
{
	public function run();
}

interface Motorized
{
	public function turnOn();
	public function fuel();
}
class Motorcycle implements Vehicle2, Motorized
{
    public function turnOn()
    {
        echo 'Motorcycle Turning on...';
    }

    public function run()
    {
        echo 'Motorcycle running...';
    }

    public function fuel()
    {
        echo 'Fuel the Motorcycle';
    }
}

class Bicycle implements Vehicle2 
{
	public function run() 
	{
		echo 'Bicycle running...';
	}
}