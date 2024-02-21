<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulátor</title>
</head>
<body></body>

<?php
if (isset($_POST['submit'])) { // Check if form is submitted
    // Retrieve form data from session variables
    $num1 = $_SESSION['num1'];
    $num2 = $_SESSION['num2'];
    $op = $_SESSION['op'];

    // Perform calculation based on form data
    switch ($op) {
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            if ($num2 == 0) {
                die("Nesmíš dělit nulou");
            } else {
                $result = $num1 / $num2;
            }
            break;
        case "m":
            $result = pow($num1, $num2);
            break;
        case "oh":
            $result = pow($num2, 1 / $num1);
            break;
        default:
            die("Chybička se vloudila"); // Handle error
    }

    echo "<p>{$result}</p>"; // Display result
}
?>
