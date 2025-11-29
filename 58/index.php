<?php

/*
Abstract Class:
- a class that cannot be instantiated. But, we instantiate it through its child class.
- it's called abstract class. Why it's called abstract class, as it cannot be instantiated. The real class is its descendants.
- to define interface for another class of its descendants.
- it's role is to be the foundation (kerangka dasar) for its descendants.
- has a minimum of 1 abstract method.
- used in inheritance to force the implementation of the common abstract method in all of its child classes. 
*/

class Fruit {
	private $color;

	public function eat(){
		// crunch
		// yummy..yummy..yummy
	}

	public function setColor($color){
		$this->color = $color;
	}
}

//child class 
class Apple extends Fruit {
	public function eat(){
		// crunch (kunyah)
		// until middle part
	}
}

//the child class above inherits all the properties and methods in class Fruit

class Lime extends Fruit {
	public function eat(){
		// peel (kupas)
		// crunch
	}
}

//abstract is illustrated below

$apple = new Apple();
$apple->eat(); // the taste of this, we know it's apple

$fruit = new Fruit(); //we don't know this fruit taste. It's either apple or lime. We aren't going to instantiate this class Fruit, as what we are going to instantiate is either apple or lime class. This is what we call as abstract concept. If we instantiate the class Fruit, it will output error. How to make the abstract class? Go to 59
$fruit->eat(); //we also execute its eat method 

