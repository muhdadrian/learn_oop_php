<?php
//Property:
//1. to represent data or condition from an object
//2. variable in an object (member variable)
//variable in a class called property and not variable

//Method:
//1. to represent a behaviour from an object
//2. if property is variable, method is a function in an object
//if make function in object (class I think) not called function anymore, but method even write in function

/*
For illustration of a Car

1. Its Property:
- name
- color
- maximumSpeed
- totalPassenger

2. Its Method:
- increaseSpeed
- decreaseSpeed
- changeTransmission
- goLeft
- goRight
*/

class Car{
	//public is a visibility or called access modifier
	public $name;
	public $color;
	public $maxSpeed;
	public $totalPassenger;

	public function increaseSpeed(){

	}

	public function decreaseSpeed(){

	}

	public function changeTransmission(){

	}

}