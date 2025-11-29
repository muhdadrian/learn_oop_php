<?php

require_once 'App/init.php';

// $product1 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// $product2 = new Game("Unchartered", "Neil Druckmann", "Sony Computer", 250000, 50);

// $printProduct = new PrintProductInfo();
// $printProduct->addProduct($product1);
// $printProduct->addProduct($product2);
// echo $printProduct->print();

new App\Service\User(); //the class is changed: added with the namespace

echo '<br>';

new App\Product\User();

//both are okey right now. If you have same name class, you just add your own namespace so that it will not confused with other people's classes.
//to write namespace:
/*
namespace Vendor\Namespace\SubNamespace;
*/ 

//to make autoloading on the different namespace. Go to 80