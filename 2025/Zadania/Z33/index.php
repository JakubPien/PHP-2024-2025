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
    <h1>Zadanie Z33 - Dzielenie</h1>
    <h2>Autor: Jakub Pieniężny 2p</h2>
</header>

<section>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="a">podaj a:</label>
        <input type="number" id="a" name="a" required><br><br>

        <label for="b">podaj b:</label>
        <input type="number" id="b" name="b" required><br><br>

        <input type="submit" value="Wyślij">
    </form>
</section>


<section>
    <p>Napisz program, który losuje dwie liczby pseudolosowe z zakresu od a do b, wyświetla te liczby i określa która z nich jest większa, mniejsza, czy liczby są równe.</p>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["a"];
        $b = $_POST["b"];




        echo ("a = $a<br> b = $b <br>");
        if ($b != 0) {
            $wynik = $a / $b;
            echo ("Wynik dzielenia: $a / $b = $wynik");
        } elseif (is_float($b) || is_float($a)) {
            echo ("Podana liczba lub liczby nie są całkowite.");
        } else {
            echo ("Nie można dzielić przez 0.");
        }
    }
    ?>
</section>

</body>
</html>
