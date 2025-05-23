<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie P48d</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie P48d - tablica zero-jeden</h1>
    <h2>Autor: Jakub Pieniężny 2p</h2>
</header>

<section><pre>
        Napisz program, który tworzy dwuwymiarową tablicę o wymiarach 5 x 5 i wypełnia ją liczbami pseudolosowymi  z zakresu <0,1>, wyświetla tą tablicę z zachowaniem wierszy i kolumn, a następnie:

wyświetla tę tablicę tak aby wartości 1 i 0 różniły się kolorami,
oblicza sumy w poszczególnych wierszach i kolumnach,
tworzy nową tablicę, w której jedynki i zerówki zamieniają się miejscami i również wyświetla ją na ekranie.
    </pre>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="submit" value="Wyślij">
    </form>
</section>


<section>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = 0;

        $w = 5;
        $k = 5;

        for ($i = 1; $i <= $w; $i++) {
            for ($j = 1; $j <= $k; $j++) {
                $tablica01[$i][$j] = rand(0, 1);
                echo $tablica01[$i][$j] . " ";
            }
            echo "<br>";
        }

        $kolor = 'black';
        echo "<br>";
        echo "<br>";
        for ($i = 1; $i <= $w; $i++) {
            for ($j = 1; $j <= $k; $j++) {
                if ($tablica01[$i][$j] == 1) {
                    $kolor = "red";
                } else {
                    $kolor = "green";
                }
                echo "<span style='color: $kolor'> " . $tablica01[$i][$j] . " </span>";
            }
            echo "<br>";
        }
        echo "<br>";


    for ($i = 1; $i <= $w; $i++) {
        for ($j = 1; $j <= $k; $j++) {
            if ($tablica01[$i][$j] == 1) {
                $x++;
            }
        }
        echo "Suma w wierszu $i jest równa $x <br>";
        $x = 0;
    }
        echo "<br>";
        for ($i = 1; $i <= $w; $i++) {
            for ($j = 1; $j <= $k; $j++) {
                if ($tablica01[$j][$i] == 1) {
                    $x++;
                }
            }
            echo "Suma w kolumnie $i jest równa $x <br>";
            $x = 0;
        }
        echo "<br>";


        for ($i = 1; $i <= $w; $i++) {
            for ($j = 1; $j <= $k; $j++) {
                if ($tablica01[$i][$j] == 1) {
                    $tablica10[$i][$j] = 0;
                } else {
                    $tablica10[$i][$j] = 1;
                }
                echo $tablica10[$i][$j] . " ";
            }
            echo "<br>";
        }



    }
    ?>
</section>

</body>
</html>
