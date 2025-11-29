<?php

/*
Interface:
- is an abstract class that has no implementation
- is a template for its child classes, which has no implementation at all
- cannot have a property, only a method declaration
- all methods must be declared with public visibility
- we can declare __contruct() inside interface to make it compulsory its child classes to have construct method
- a child class can implement many interface (you can have many interface that is implemented by a class)
*/

//Abstract class a class that has at least an abstract method
//when we have an abstract method, we just write that method its definition only, while its implementation is in its child classes. Conversely, in interface class, all must be only definition 

//Examples (we recall 1st about the abstract class):

abstract class Fruit {
	private $color; //ordinary property

	//because of abstract class, it must have at least an abstract method (it means it has no implementation):
	abstract public function eat();

	//ordinary method
	public function setColor($color) {
		$this->color = $color;
	}
}

//further explanation:
//abstract class Fruit is an abstract class
//abstract public function eat is an abstract method, it's only and interface and its implementation is in its child class

//example of child classes:

class Apple extends Fruit {
	public function eat() {
		//crunch
		//until half of it
	}
}

class Orange extends Fruit {
	public function eat() {
		//peel
		//crunch
	}
}

// we cannot make an instance for the main Fruit class as it's an abstract class. We can only make the instance at its child classes

//how to make the code above as an interface? go to 64