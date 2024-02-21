<?php
    if (isset($_POST['submit'])) {   // vstup

        // nastavení hodnot
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $op = $_POST['op'];

        // výpočty
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
                } 
                else {
                    $result = $num1 / $num2;
                }
                break;
            case "m":
                $result = pow($num1, $num2);
                break;
            case "oh":
                $result = pow($num2, 1/$num1);
                break;
            default:
                // chyba
                die("Chybička se vloudila");
        }

        echo "<p>{$result}</p>";
    }
?>