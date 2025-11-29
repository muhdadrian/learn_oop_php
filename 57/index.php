<?php

/*
in PHP there's Magic Constant those are automatically made by PHP:
1. __LINE__
2. __FILE__
3. __DIR__
4. __FUNCTION__
5. __CLASS__
6. __TRAIT__
7. __METHOD__
8. __NAMESPACE__

- all constants above have their own values 
*/

echo __LINE__; //this will display the line 17. Try to move this to line 19.
echo "<br>";
echo __FILE__; //the address of the constant file
echo "<br>";

function test(){
	return __FUNCTION__;
}

echo test();//we are in test function

echo "<br>";

class Test{
	public $class = __CLASS__;
}

$obj = new Test;
echo $obj->class;