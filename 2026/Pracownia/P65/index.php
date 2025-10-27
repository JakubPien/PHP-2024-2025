<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>P65</title>
</head>
<body>

<header>
    <h1>Zadanie P65 - równanie kwadratowe</h1>
    <h2>Autor: Jakub Pieniężny 3p</h2>
</header>

<section>
    <p>
        Napisz program, który oblicza pierwiastki równania kwadratowego.
        Program dla danych A, B i C ma sprawdzać czy równanie jest kwadratowe,
        czy ma jeden czy dwa pierwiastki i czy ma rozwiązanie.
    </p>

    <form action="index.php" method="post">
        <p>Podaj A:</p><input type="number" name="numa" step="any" required>
        <p>Podaj B:</p><input type="number" name="numb" step="any" required>
        <p>Podaj C:</p><input type="number" name="numc" step="any" required>
        <br><br>
        <input type="submit" name="dzialaj" value="Oblicz">
    </form>
</section>

<section>
    <?php
    if (isset($_POST["dzialaj"])) {
        $a = $_POST["numa"];
        $b = $_POST["numb"];
        $c = $_POST["numc"];
        $rozwiazanie = "";
        $delta = $b * $b - 4 * $a * $c;

        if ($a == 0) {
            $rozwiazanie = "To nie jest równanie kwadratowe";
        } else {
            if ($delta > 0) {
                $x1 = (-$b - sqrt($delta)) / (2 * $a);
                $x2 = (-$b + sqrt($delta)) / (2 * $a);
                $rozwiazanie = "Rozwiązanie: Równanie ma dwa pierwiastki rzeczywiste: x1 = $x1, x2 = $x2";
            } elseif ($delta == 0) {
                $x0 = -$b / (2 * $a);
                $rozwiazanie = "Rozwiązanie: Równanie ma jeden pierwiastek podwójny: x0 = $x0";
            } else {
                $realPart = -$b / (2 * $a);
                $imagPart = sqrt(-$delta) / (2 * $a);
                $rozwiazanie = "Rozwiązanie: Równanie nie ma rozwiązania w dziedzinie liczb rzeczywistych, ";
                $rozwiazanie = "ale ma dwa pierwiastki zespolone: ";
                $rozwiazanie = "x1 = $realPart + {$imagPart}i, x2 = $realPart - {$imagPart}i";
            }
        }

        echo "A = $a <br> B = $b <br> C = $c <br>";
        echo "Postać równania f(x) =$a*x<sup>2</sup> + $b * x + $c <br>";
        echo "Rozwiązanie: $rozwiazanie";
    }
    ?>
</section>

</body>
</html>
