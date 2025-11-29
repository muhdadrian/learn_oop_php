<?php

/*
To make abstract class is by adding abstract keyword before class Fruit:

abstract class Fruit {

}

*/

//class abstract
abstract class Fruit {
	private $color;

	abstract public function eat(); //abstract method...it's only an interface...its implementation is in its child class

	public function setColor($color) {
		$this->color = $color;
	}
}

/*
Abstract Class (2):
1. all child classes must implement the abstract method in its abstract class.
2. abstract class can have property/regular method (there must be a minimum of one abstract method)
3. abstract class can have property/static method
*/

/*
The examples of abstract class:
1. class Mobil Extends Transport
2. class Laptop Extends Computer
3. class Email Extends Communication
...

We can make the Transport, Computer and Communication as abstract classes.
*/

/*
Why we are using abstract class?
1. to represent idea or basic concept to be implemented in the child classes. If we really want to apply the OOP concept, why not we use the abstract concept.
2. there's concept in OOP called 'Composition over Inheritance'. It's better we do composition rather than inheritance just like that. Without using abstract class is can and only using inheritance, but it will be weird when we are going to instantiate the class for example the class Fruit. There will be no problem if we never instantiate the class Fruit. The composition here means we use abstract or interface. 
3. By doing the composition is one of the ways we apply the OOP concept called polymorphism, which is a far more complex OOP concept. To reach here, you must understand the abstract and interface.
4. Logic centrelization.
5. it will make the work in team more convenient.   
*/