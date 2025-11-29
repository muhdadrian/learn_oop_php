<?php

//this file will be the 1st to be accessed or opened

require_once 'App/Product/InfoProduct.php';
require_once 'App/Product/Product.php';
require_once 'App/Product/Comic.php';
require_once 'App/Product/Game.php';
require_once 'App/Product/PrintProductInfo.php';

//by using require above will be problematic when the program is becoming big, as you will require more files
//next go to 71 to separate all the require above in different file (init.php)

$product1 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$product2 = new Game("Unchartered", "Neil Druckmann", "Sony Computer", 250000, 50);

$printProduct = new PrintProductInfo();
$printProduct->addProduct($product1);
$printProduct->addProduct($product2);
echo $printProduct->print();
