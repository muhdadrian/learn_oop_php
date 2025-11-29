<?php
/*
we illustrate the inheritance here first:
- parent class is car
- its child class is sportcar
- the sportcar has property of turbo (true or false)
- the sportcar method: executeTurbo
*/

//Parent Class
class Car {
	public $name, $color,
				 $maxSpeed,
				 $totalPassengers;

	public function addSpeed() {
		return "Speed Increased!";
	}
}

//Child Class
class SportCar extends Car {
	public $turbo = false;

	public function startTurbo(){
		$this->turbo = true;
		return "Turbo has been started!";
	}
}

//we instantiate
$car1 = new SportCar();
echo $car1->addSpeed();
echo "<br>";
echo $car1->startTurbo();
