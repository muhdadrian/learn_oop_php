<?php

// require_once 'Product/InfoProduct.php';
// require_once 'Product/Product.php';
// require_once 'Product/Comic.php';
// require_once 'Product/Game.php';
// require_once 'Product/PrintProductInfo.php';
// require_once 'Product/User.php';
// require_once 'Service/User.php';

spl_autoload_register(function($class){
	$class = explode('\\', $class);//explode function to break a string based on a certain separator. If backslash use double as the 1st is an escape character.How to read?: backslash from the string $class 
	$class = end($class);//to get the last element in an array
	require_once 'Product/' . $class . '.php';
});

/*
to understand the explose function above:
App\Product\User = ["App", "Product", 
"User"]
$class = explode('\\', $class); //this will result on the above array
$class = end($class); //I want to take the User (the name class) in the end of the array by using end() function to take the last element in the array. We overwrite the $class var. Now the $class var is containing User.

if we take class Game:
-is there any namespace in game? If there's none:
-Game (it will be written only Game)
- if you explode it by using \:
	Game = ["Game"] 
	
	
*/

spl_autoload_register(function($class){
	$class = explode('\\', $class);
	$class = end($class);
	require_once 'Service/' . $class . '.php';
});


