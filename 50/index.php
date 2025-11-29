<?php

class StaticExample {

	public static $number = 1; 

	public static function hello(){
		return "Hello " . self::$number . " time.";
	} 
}

echo StaticExample::$number;
echo "<br>";
echo StaticExample::hello();
echo "<hr>"; 
echo StaticExample::hello();