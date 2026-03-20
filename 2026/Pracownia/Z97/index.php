<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Z95</title>
</head>
<body>

<header>
    <h1>Z97 - suma w wierszu</h1>
    <h2>Autor: Jakub Pieniężny 3p</h2>
</header>


<section>

    <pre>
      Napisz program, który wczytuje liczby do tablicy o wymiarach n x m i oblicza sumę wartości we wskazanym wierszu. Numer wiersza podaje użytkownik (numerowanie od 0). Użytkownik wprowadza n, m, liczby do komponentu textarea oddzielone przecinkami oraz numer wiersza. Program powinien zweryfikować, czy n, m i numer wiersza są liczbami całkowitymi, czy podane wartości są liczbami, czy ich liczba zgadza się z n x m, a następnie wyświetlić tablicę i sumę wartości w wybranym wierszu.
    </pre>


    <form action="index.php" method="POST">
        <label>
            Liczba wierszy (n):<br>
            <input type="number" name="n" ><br><br>
        </label>

        <label>
            Liczba kolumn (m):<br>
            <input type="number" name="m" ><br><br>
        </label>

        <label>
            Numer wiersza (0 do n-1):<br>
            <input type="number" name="nw"><br><br>
        </label>

        <label>
            Wartości tablicy (liczby oddzielone przecinkami):<br>
            <textarea name="values" rows="4" cols="30" placeholder="np: 1,2,3,4" ></textarea><br><br>
        </label>

        <input type="submit" value="Wyślij">
    </form>

</section>

<section>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {


        $n = (int)$_POST["n"];
        $m = (int)$_POST["m"];
        $nw = (int)$_POST["nw"];
        $rezultat = 0;

        $text_wartosci = $_POST['values'];
        $wartosci = explode(',', $text_wartosci);
        $ilosc = count($wartosci);


        if (!is_numeric($n) || !is_numeric($m) || !is_numeric($nw)) {
            $rezultat = "n, m i numer wiersza muszą być liczbami.";
        } else if ($n <= 0 || $m <= 0) {
            $rezultat = "n i m muszą być dodatnie.";
        } else if ($nw >= $n) {
            $x = $n -1;
            $rezultat = "Numer wiersza musi być w zakresie od 0 do $x.";
        } else if ($ilosc != $n * $m) {
            $x = $n * $m;
            $rezultat = "Liczba wprowadzonych wartości ($ilosc) nie zgadza się z rozmiarem tablicy ($x).";
        } else {
            $wartosci = array_map('trim', $wartosci);

            foreach ($wartosci as $w) {
                if (!is_numeric($w)) {
                    $rezultat = "Wszystkie wartości muszą być liczbami.";
                    break;
                }
            }

            if ($rezultat === 0) {

                $tablica = array_chunk($wartosci, $m);

                echo "Tablica $n x $m:<br>";

                foreach ($tablica as $wiersz) {
                    foreach ($wiersz as $val) {
                        printf("%8s", $val);
                    }
                    echo "<br>";
                }

                $suma = array_sum($tablica[$nw]);

                $rezultat = "Suma wartości w wierszu $nw: $suma";
            }
        }




        echo "Wymiary tablicy: n = $n, m = $m <br>";
        echo "Numer wiersza: $nw<br>";
        echo "Wprowadzone liczby: " . htmlspecialchars($_POST["values"]) . "<br>";
        echo "Rezultat: $rezultat ";
    }
    ?>
</section>

</body>
</html>
