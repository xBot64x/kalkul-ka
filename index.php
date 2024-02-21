<?php
session_start(); // začni session

if (isset($_POST['submit'])) { // načti uložená data jestli jsou přítomná
    $_SESSION['num1'] = $_POST['num1'];
    $_SESSION['num2'] = $_POST['num2'];
    $_SESSION['op'] = $_POST['op'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulátor</title>
</head>
<body>
<marquee>nemám rád php</marquee>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <div class="form_row">
        <input type="number" step="any" name="num1" value="<?php echo $_SESSION['num1']; ?>" required><br>
        <select id="op" name="op">
            <option value="+" <?php echo $_SESSION['op'] == '+' ? 'selected' : ''; ?>>plus</option>
            <option value="-" <?php echo $_SESSION['op'] == '-' ? 'selected' : ''; ?>>mínus</option>
            <option value="*" <?php echo $_SESSION['op'] == '*' ? 'selected' : ''; ?>>krát</option>
            <option value="/" <?php echo $_SESSION['op'] == '/' ? 'selected' : ''; ?>>děleno</option>
            <option value="m" <?php echo $_SESSION['op'] == 'm' ? 'selected' : ''; ?>>mocnina</option>
            <option value="oh" <?php echo $_SESSION['op'] == 'oh' ? 'selected' : ''; ?>>odmocnina</option>
        </select>
        <input type="number" step="any" name="num2" value="<?php echo $_SESSION['num2']; ?>" required><br>
        <p>=</p>
        <div class="box">
            <?php include 'kalkulacka.php'; ?> <!-- výsledek -->
        </div>
    </div>

    <input type="submit" name="submit" value="Vypočítat">
</form>
</body>
</html>