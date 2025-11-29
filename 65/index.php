<?php

interface Fruit {
	public function eat();
	public function setColor($color);
}

//we have another interface
interface Thing {
	public function setMeasure($measure);
}

//we implement the Thing in class
class Apple implements Fruit, Thing {
	protected $color;
	protected $measure;
	public function eat() {
		//crunch
		//until half of it
	}
	public function setColor($color){
		$this->color = $color;
	}
	public function setMeasure($measure)
	{
		$this->measure = $measure;
	}
}

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

//By using interface, we can do 'Dependency Injection' if we do 'type-hinting'
//dependency injection -- we force a method to accept parameter of an object 
//type-hinting is an object type where we can make an object as a parameter
//by doing interface, we can achieve Polymorphism