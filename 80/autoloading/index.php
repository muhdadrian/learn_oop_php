<?php

require_once 'App/init.php';

// $product1 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// $product2 = new Game("Unchartered", "Neil Druckmann", "Sony Computer", 250000, 50);

// $printProduct = new PrintProductInfo();
// $printProduct->addProduct($product1);
// $printProduct->addProduct($product2);
// echo $printProduct->print();

new App\Product\User(); 

echo '<br>';

new App\Service\User();

//both are executable even both class name same, but the namespace is different

//next topic we can give @ in 81