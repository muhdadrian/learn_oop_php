<?php

// require_once 'Product/InfoProduct.php';
// require_once 'Product/Product.php';
// require_once 'Product/Comic.php';
// require_once 'Product/Game.php';
// require_once 'Product/PrintInfoProduct.php';

spl_autoload_register(function($class){
	//we execute all the classes inside the product folder below and the class parameter above will call all the classes automatically (below the <?php)
	//

	require_once 'Product/' . $class . '.php';

	//require_once __DIR__ . 'Product/' . $class . '.php'; //without __DIR__ also can. But, with DIR is more complete
});

//the function above will look what registered class inside product class with .php extension

//we try to make another class in 73