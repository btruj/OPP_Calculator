<?php

// declare that strict typing is enabled to ensure type safety
declare(strict_types=1);

// include the file that autoloads all the classes
include 'class-autoload.inc.php';

// get the operator and numbers from the form data sent through the POST method
$oper = $_POST['oper'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

// create a new instance of the Calc class and pass in the operator and numbers as arguments to the constructor
$calc = new Calc($oper, (int)$num1, (int)$num2);

try {
    // call the calculator method of the Calc object and display the result
    echo $calc->calculator();
} catch (TypeError $e) {
    // if there is a type error, display an error message
    echo "Error1: " . $e->getMessage() . "<br>";
}
