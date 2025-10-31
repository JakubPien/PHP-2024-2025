<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>P68</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Zadanie P68 - punkt i prostokąt</h1>
    <h2>Autor: Jakub Pieniężny 3p</h2>
</header>

<section>
    <p>
        Napisz program, który określi położenie punktu o współrzędnych (x, y) względem prostokąta wyznaczonego przez proste X=A, X=B, Y=C, Y=D, gdzie A < B i C < D. Program powinien przyjmować dane z formularza (współrzędne punktu oraz parametry prostokąta), weryfikować, czy są to liczby oraz czy A < B i C < D, a następnie wyświetlać dane wejściowe i wynik analizy w czytelny sposób (np. czy punkt leży wewnątrz, na krawędzi czy na zewnątrz prostokąta).

        Wskazówki dla ucznia:
        Sprawdź, czy wszystkie dane wejściowe są liczbami za pomocą is_numeric().
        Zweryfikuj warunki A < B i C < D, aby prostokąt był poprawnie zdefiniowany.
        Punkt leży wewnątrz prostokąta, jeśli x jest między A i B (A < x < B) oraz y jest między C i D (C < y < D).
        Punkt leży na krawędzi, jeśli x=A lub x=B albo y=C lub y=D (przy zachowaniu pozostałych warunków).
        Zabezpiecz dane wejściowe za pomocą htmlspecialchars(), aby uniknąć problemów z XSS.
    </p>
    <form action="index.php" method="post">
        <fieldset>
            <legend>Współrzędne punktu</legend>
            X: <input type="text" name="x"> <br>
            Y: <input type="text" name="y"> <br>
        </fieldset>

        <fieldset>
            <legend>Współrzędne prostokąta</legend>
            A: <input type="text" name="a"> <br>
            B: <input type="text" name="b"> <br>
            C: <input type="text" name="c"> <br>
            D: <input type="text" name="d"> <br>
        </fieldset>

        <input type="submit" name="btn" value="Oblicz">
    </form>
</section>

<section>
    <?php
    if (isset($_POST['btn'])) {
        $x = htmlspecialchars($_POST['x']);
        $y = htmlspecialchars($_POST['y']);
        $a = htmlspecialchars($_POST['a']);
        $b = htmlspecialchars($_POST['b']);
        $c = htmlspecialchars($_POST['c']);
        $d = htmlspecialchars($_POST['d']);
        $rezultat = "";

        if (!is_numeric($x) || !is_numeric($y) || !is_numeric($a) || !is_numeric($b) || !is_numeric($c) || !is_numeric($d)) {
            $rezultat = "Wszystkie wartości muszą być liczbami.";
        }
        else if ($a >= $b) {
            $rezultat = "A musi być mniejsze od B.";
        }
        else if ($c >= $d) {
            $rezultat =  "C musi być mniejsze od D.";
        }
        else {
            $x = (float)$x;
            $y = (float)$y;
            $a = (float)$a;
            $b = (float)$b;
            $c = (float)$c;
            $d = (float)$d;

            if ($x > $a && $x < $b && $y > $c && $y < $d) {
                $rezultat = "Punkt ($x, $y) leży **wewnątrz** prostokąta.";
            }
            else if (
                    ($x == $a || $x == $b) && ($y >= $c && $y <= $d) ||
                    ($y == $c || $y == $d) && ($x >= $a && $x <= $b)
            ) {
                $rezultat = "Punkt ($x, $y) leży na krawędzi prostokąta.";
            }
            else {
                $rezultat = "Punkt ($x, $y) leży poza prostokątem.";
            }
        }

        echo "Punkt: ($x, $y) <br>";
        echo "Prostokąt: X=A=$a, X=B=$b, Y=C=$c, Y=D=$d <br>";
        echo "Rezultat: $rezultat <br>";
    }
    ?>
</section>

</body>
</html>
