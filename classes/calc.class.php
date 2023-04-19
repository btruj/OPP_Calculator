<?php

// Define a new class called "Calc"
class Calc {

    // Define public variables for the operator, first number, and second number
    public $operator;
    public $num1;
    public $num2;

    // Define a constructor method that takes in an operator, a first number, and a second number
    public function __construct(string $one, int $two, int $three){
        $this->operator = $one; // Set the operator property of the object to the first argument passed to the constructor
        $this->num1 = $two; // Set the num1 property of the object to the second argument passed to the constructor
        $this->num2 = $three; // Set the num2 property of the object to the third argument passed to the constructor
    }

    // Define a method called "calculator" that performs the calculation based on the operator, num1, and num2 properties
    public function calculator(){
        switch($this->operator){ // Use a switch statement to check the value of the operator property
            case 'add': // If the operator is "add", perform addition
                $result = $this->num1 + $this->num2;
                return $result; // Return the result of the addition
                break;

            case 'sub': // If the operator is "sub", perform subtraction
                $result = $this->num1 - $this->num2;
                return $result; // Return the result of the subtraction
                break;
            
            case 'div': // If the operator is "div", perform division
                $result = $this->num1 / $this->num2;
                return $result; // Return the result of the division
                break;
            
            case 'mul': // If the operator is "mul", perform multiplication
                $result = $this->num1 * $this->num2;
                return $result; // Return the result of the multiplication
                break;
           
             default: // If the operator is not recognized, print an error message
                echo "Error!";
                break;
        }
    }

}
