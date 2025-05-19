<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie Z32 - liczby pseudolosowe</h1>
    <h2>Autor: Jakub Pieniężny 2p</h2>
</header>

<section>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="min">a (minimalna wartość):</label>
        <input type="number" id="min" name="min" required><br><br>

        <label for="max">b (maksymalna wartość):</label>
        <input type="number" id="max" name="max" required><br><br>

        <input type="submit" value="Wyślij">
    </form>
</section>


<section>
    <p>Napisz program, który losuje dwie liczby pseudolosowe z zakresu od a do b, wyświetla te liczby i określa która z nich jest większa, mniejsza, czy liczby są równe.</p>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $min = $_POST["min"];
        $max = $_POST["max"];

        $x = rand($min, $max);
        $y = rand($min, $max);
        echo ("liczby losowana z zakresu od $min do $max <br>");
        echo ("Wylosowana liczba1 = $x <br>");
        echo ("Wylosowana liczba2 = $y <br>");
        if ($x > $y) {
            echo ("$x > $y");
        } elseif ($x < $y) {
            echo ("$x < $y");
        } else {
            echo ("$y = $x");
        }
    }
    ?>
</section>

</body>
</html>
