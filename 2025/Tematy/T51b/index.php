<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie T51b</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

<header>
    <h1>Zadanie T51b - tablica dwuwymiarowa sumy</h1>
    <h2>Autor: Jakub Pieniężny 2p</h2>
    <link rel="stylesheet" href="style.css">
</header>

<section>

    <pre>
        Napisz program, który do dwuwymiarowej tablicy o wymiarach 5 x 3 wpisuje liczby pseudolosowe z zakresu <10,99>, wyświetla tą tablicę, a następnie obliczy:

Sumy wartości w poszczególnych wierszach.
Sumę maksymalnych wartości w poszczególnych kolumnach.
Przykład tabeli:

10 10 12
10 12 13
10 10 10
10 10 10
10 10 10


S1 = 10+10+12 = 32

S2 = 10+12+13 = 35

S3 = 10+10+10 = 30

S4 = 10+10+10 = 30

S5 = 10+10+10 = 30

SumaMax = 10+12+13 = 35


    </pre>

    <?php
    $wiersze = 5;
    $kolumny = 3;
    $tablica = [];

    for ($i = 0; $i < $wiersze; $i++) {
        for ($j = 0; $j < $kolumny; $j++) {
            $tablica[$i][$j] = rand(10, 99);
        }
    }

    echo "<table>";
    foreach ($tablica as $wiersz) {
        echo "<tr>";
        foreach ($wiersz as $wartosc) {
            echo "<td>$wartosc</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<h2>Sumy wierszy:</h2>";
    for ($i = 0; $i < $wiersze; $i++) {
        $suma_wiersza = array_sum($tablica[$i]);
        echo "S" . ($i + 1) . " = $suma_wiersza<br>";
    }

    $suma_max_kolumn = 0;
    echo "<h2>Maksymalne wartości w kolumnach:</h2>";
    for ($j = 0; $j < $kolumny; $j++) {
        $maks = $tablica[0][$j];
        for ($i = 1; $i < $wiersze; $i++) {
            if ($tablica[$i][$j] > $maks) {
                $maks = $tablica[$i][$j];
            }
        }
        echo "Maks kolumna " . ($j + 1) . " = $maks<br>";
        $suma_max_kolumn += $maks;
    }

    echo "<h2>Suma maksymalnych wartości w kolumnach: $suma_max_kolumn</h2>";
    ?>
</section>

</body>
</html>
