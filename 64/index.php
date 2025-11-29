<?php

/*
-to make an interface, we just need to add interface keyword in front of the class name
-inside the class we can only have a method declaration. Before this the eat method is an abstract method, but now it returned to a normal method, but has no implementation 
-the setColor is also only a declaration and has no implementation.
-they are only a template where the child class must have the implementation from the two methods below of eat and setColor
-the property in the class is removed, as the interface class cannot have a property
-now it's only a template where the Fruit class an interface and it's like an abstract class that cannot be instantiated 
*/

interface Fruit {
	public function eat();
	public function setColor($color);
}

//we add implements keyword to make it implementing from the Fruit interface class
//it must have two set of method implementation from the method inside the interface  
class Apple implements Fruit{
	protected $color;//the property moved to here, as cannot have property inside the interface
	public function eat() {
		//crunch
		//until half of it
	}
	public function setColor($color){
		$this->color = $color;
	}
}

//it goes the same to the child class below
class Orange implements Fruit {
	protected $color;
	public function eat() {
		//peel
		//crunch
	}
	public function setColor($color) {
		$this->color = $color;
	}
}