<?php

//we try to do it (load) manually 1st.
require_once 'Product/InfoProduct.php';
require_once 'Product/Product.php';
require_once 'Product/Comic.php';
require_once 'Product/Game.php';
require_once 'Product/PrintProductInfo.php';

//we add the new one
require_once 'Product/User.php';

require_once 'Service/User.php';//this will also output error (Cannot declare class User, because the name is already in use). So how to resolve this as I still want to use the class User (I do not want to change the name). Here where we need namespace. Go to 78 

// spl_autoload_register(function($class){
// 	require_once 'Product/' . $class . '.php';
// });

