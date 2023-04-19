<?php

// Register the 'myAutoLoader' function as an autoloader for the program.
spl_autoload_register('myAutoLoader');

// Define the function 'myAutoLoader' which takes a string 'className' as input.
function myAutoLoader($className) {
    
    // Determine the URL of the current page.
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    
    // If the 'includes' string is present in the URL, set the $path variable to '../classes/'.
    if (strpos($url, 'includes') !== false) {
        $path = '../classes/';
    } 
    // Otherwise, set the $path variable to 'classes/'.
    else {
        $path = 'classes/';
    }
    
    // Set the $extension variable to '.class.php'.
    $extension = '.class.php';
    
    // Require the file corresponding to the class name, using the specified $path and $extension.
    require_once $path . $className . $extension;
}
