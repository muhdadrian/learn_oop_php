<?php

//this file to initiate all the classes
//remove all the App in front of Product

require_once 'Product/InfoProduct.php';
require_once 'Product/Product.php';
require_once 'Product/Comic.php';
require_once 'Product/Game.php';
require_once 'Product/PrintProductInfo.php';

//we can use auto_loading function for all classes and no need to do manually like require above:
//spl_autoload_register();
//spl -- standard php library
//go to 72
