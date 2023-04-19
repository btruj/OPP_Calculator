<?php
declare(strict_types=1);
include 'includes/class-autoload.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>OPP Calculator</title>
    </head>
    <body>

    <form action="includes/calc.inc.php" method="post">
        <p>my calculator!</p>
        <input type="number" name="num1" placeholder="First Number">
        <select name="oper">
            <option value="add">Addition</option>
            <option value="sub">Subtraction</option>
            <option value="div">Division</option>
            <option value="mul">Multiplication</option>
        </select>
        <input type="number" name="num2" placeholder="Second Number">
        <button type="submit" name="submit">Calculate</button>
    </form>

    </body>
</html>

<!-- This code defines an HTML form that accepts two numbers and an operation to perform on those numbers. It includes a reference to a PHP file that performs the calculation and returns the result to the user.

Here's a detailed breakdown of how the code works:

    The first line of PHP code declares strict typing and includes a file called "class-autoload.inc.php" that loads all the required classes automatically.
    The HTML code defines a form with three input fields and a button.
    The "action" attribute of the form tells the browser where to submit the form data when the user clicks the "Calculate" button. In this case, it points to a file called "calc.inc.php" inside the "includes" folder.
    The "method" attribute of the form specifies whether the form data should be sent using the "GET" or "POST" method. In this case, it's set to "POST".
    The first input field is a text box where the user can enter the first number.
    The "select" element creates a drop-down list with four options: addition, subtraction, division, and multiplication.
    The second input field is another text box where the user can enter the second number.
    The "button" element creates a button that the user can click to submit the form.
    When the user clicks the "Calculate" button, the form data is sent to the "calc.inc.php" file using the HTTP POST method.
    The "calc.inc.php" file retrieves the form data using the $_POST array, creates a new instance of the "Calc" class, and passes the form data as arguments to the class constructor.
    The "calculator" method of the "Calc" class performs the requested calculation based on the operator selected by the user and the two numbers entered in the form.
    The result of the calculation is returned to the "calc.inc.php" file, which outputs it to the user as plain text. -->