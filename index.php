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
<form method="post" select="<?php echo $_SERVER['PHP_SELF']; ?>">

    <div class="form_row">
        <input type="number" step=any id="num1" name="num1" required><br>
        <select id="op" name="op">
            <option value="+">plus</option>
            <option value="-">mínus</option>
            <option value="*">krát</option>
            <option value="/">děleno</option>
            <option value="m">mocnina</option>
            <option value="oh">odmocnina</option>
        </select>
        <input type="number" step=any id="num2" name="num2" required><br>
        <p>=</p>
        <div class="box">
            <?php include 'kalkulacka.php'; ?>
        </div>
    </div>

    <input type="submit" name="submit" value="Vypočítat">
</form>
</body>
</html>