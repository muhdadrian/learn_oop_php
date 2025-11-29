<?php

spl_autoload_register(function($class){

	require_once 'Product/' . $class . '.php';
	require_once 'Service/' . $class . '.php';//this will not work. See the error details

});

