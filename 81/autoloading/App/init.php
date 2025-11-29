<?php

// require_once 'Product/InfoProduct.php';
// require_once 'Product/Product.php';
// require_once 'Product/Comic.php';
// require_once 'Product/Game.php';
// require_once 'Product/PrintProductInfo.php';
// require_once 'Product/User.php';
// require_once 'Service/User.php';

spl_autoload_register(function($class){
	$class = explode('\\', $class);
	$class = end($class);
	require_once 'Product/' . $class . '.php';
});

spl_autoload_register(function($class){
	$class = explode('\\', $class);
	$class = end($class);
	require_once 'Service/' . $class . '.php';
});


