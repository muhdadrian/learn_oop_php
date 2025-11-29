<?php

/*
- we can give @ or different name from namespace.
- why we need other name? The namespace might be too long.
- Each time to call the class you have to write all the namespace. It will be more difficult later.
- to make @. Go to the instance 

*/

require_once 'App/init.php';

// $product1 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// $product2 = new Game("Unchartered", "Neil Druckmann", "Sony Computer", 250000, 50);

// $printProduct = new PrintProductInfo();
// $printProduct->addProduct($product1);
// $printProduct->addProduct($product2);
// echo $printProduct->print();

use App\Service\User;// I will use this namespace

//use App\Product\User;// Lastly, if I use this code, this will confuse the new User() below, which to use. Go to 82 to differentiate

new User(); // We just instantiate the User class like this. Php will not confuse, as it using the Service

echo '<br>';

new App\Product\User();//for product just use its namespace
