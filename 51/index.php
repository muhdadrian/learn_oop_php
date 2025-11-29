<?php

//Static Keyword:
//members (property and method) that is bound with class, not with object.
//the static value will be constant even the object is instantiate repeteadly.
//to make the code as if 'procedural' as we can directly call its property and method in class without instantiating
//normally used to make function helper
//used in utility classes in framework such as laravel etc.

class StaticExample {

	public static $number = 1; 

	public static function hello(){
		return "Hello " . self::$number++ . " time.";
	} 
}

echo StaticExample::$number;
echo "<br>";
echo StaticExample::hello();
echo "<hr>"; 
echo StaticExample::hello();
echo "<hr>"; 
echo StaticExample::hello();