<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Średnia geometryczna</title>
</head>
<body>

<header>
    <h1>Zadanie T51b - tablica dwuwymiarowa sumy</h1>
    <h2>Autor: Jakub Pieniężny 2p</h2>
    <link rel="stylesheet" href="style.css">
</header>

<section>

<p>Napisz program, który dla czterech liczb rzeczywistych oblicza i wyświetla ich średnią geometryczną. Wynik wyświetl w dwóch postaciach. Bez zaokrąglenia oraz z zaokrągleniem do trzech miejsc po przecinku.</p>
<form method="post">
    Podaj a: <input type="number" step="any" name="a" required><br><br>
    Podaj b: <input type="number" step="any" name="b" required><br><br>
    Podaj c: <input type="number" step="any" name="c" required><br><br>
    Podaj d: <input type="number" step="any" name="d" required><br><br>
    <input type="submit" value="Oblicz">
</form>

</section>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = (float)$_POST["a"];
    $b = (float)$_POST["b"];
    $c = (float)$_POST["c"];
    $d = (float)$_POST["d"];

    // Sprawdzanie, czy wszystkie liczby są większe od zera
    if ($a <= 0 || $b <= 0 || $c <= 0 || $d <= 0) {
        echo "<p style='color:red;'>Wszystkie liczby muszą być większe od zera, aby obliczyć średnią geometryczną.</p>";
    } else {
        $srednia = pow($a * $b * $c * $d, 1/4);
        $srednia_zaokraglona = round($srednia, 3);

        echo "a: $a <br>b: $b <br>c: $c <br>d: $d <br> Średnia $srednia<br>";
        echo "Średnia zaokrąglona $srednia_zaokraglona";
    }
}
?>
</body>
</html>
