<?php

//we try use normal oop

class Example {
	public $number = 1;

	public function hello() {
		return "Hello " .$this->number++. " times. <br>";
	}
}

$obj = new Example;
echo $obj->hello();
echo $obj->hello();
echo $obj->hello();

echo "<hr>";

$obj2 = new Example;
echo $obj2->hello();
echo $obj2->hello();
echo $obj2->hello();

//the object instantiation above got no problem, but when we put static keyword, there will be problem. Go to 53