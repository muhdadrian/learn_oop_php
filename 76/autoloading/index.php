<?php

require_once 'App/init.php';

// $product1 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// $product2 = new Game("Unchartered", "Neil Druckmann", "Sony Computer", 250000, 50);

// $printProduct = new PrintProductInfo();
// $printProduct->addProduct($product1);
// $printProduct->addProduct($product2);
// echo $printProduct->print();

new User();


//in service folder it will organize service, while in Product folder, it will organize product

//there are two similar file names and classes namely User.php in both Product and Service folders.

//even you change the file name in Service folder to Users.php and its class to class Users. It still will not work. The php will require User.php in Service as in default product it's available. PHP assume that all the classes in Product are also available in Service if we write like below in init.php:

/*
	require_once 'Product/' . $class . '.php';
	require_once 'Service/' . $class . '.php';
*/

//go to 77
