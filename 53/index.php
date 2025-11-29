<?php


class Example {
	public static $number = 1;

	public function hello() {
		return "Hello " . self::$number++. " times. <br>";
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

//the number is not reset for obj2 when we use static keyword and self::$number 