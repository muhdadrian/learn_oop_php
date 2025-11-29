<?php

//Constant:
//an identifier to store value
//the stored value is immutable

//in PHP there are two methods to make constant:
//1. define()
//2. const

//define(name, value)

//always write constant with uppercase 
define('NAME', 'Adrian Nandu');

//to access it:
echo NAME;// without using $

echo "<br>";

//next method to make constant:
const AGE = 42;
echo AGE;

/*
What is the difference between define and const?
- define cannot be used inside the class. It must be at outside as global constant
- const can be written inside class until you can use it in OOP. 
*/