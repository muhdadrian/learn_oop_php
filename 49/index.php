<?php

//Static Keyword

//Review - class is a template for object

//we can access property and method in class without instantiating by using static keyword 
//we can make static property and static method to access class context

class StaticExample {
	//property
	public static $number = 1; 

	//method
	public static function hello(){
		return "Hello.";
	} 
}

//to print
echo StaticExample::$number;
echo "<br>";
echo StaticExample::hello();//write the round bracket as it's a method