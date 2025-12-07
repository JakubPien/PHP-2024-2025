<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Z92</title>
</head>
<body>

<header>
    <h1>Zadanie Z92 - tablica n x m</h1>
    <h2>Autor: Jakub Pieniężny 3p</h2>
</header>


<section>

    <pre>
       Napisz program, który wypełnia tablicę o wymiarach n x m, gdzie n<100 i m<100 - wartości n i m podaje użytkownik, a następnie wyświetla te liczby. Liczby należy wprowadzić do komponentu textarea oddzielone przecinkami. Program powinien zweryfikować, czy n i m są liczbami całkowitymi mniejszymi od 100, czy podane wartości są liczbami (całkowitymi lub rzeczywistymi), oraz czy ich liczba zgadza się z n x m, a następnie wyświetlić tablicę w czytelny sposób, np. w formie tabeli.

       Wskazówki dla ucznia:
        Sprawdź, czy n i m są liczbami całkowitymi (is_numeric() i is_int() po konwersji) oraz czy są mniejsze od 100.
        Użyj explode(), aby rozdzielić ciąg z textarea na tablicę liczb na podstawie przecinków.
        Zweryfikuj, czy każda wartość jest liczbą za pomocą is_numeric().
        Przekształć jednowymiarową tablicę na dwuwymiarową, rozdzielając ją na wiersze po m elementów.
        Zabezpiecz dane wejściowe za pomocą htmlspecialchars() przy pobieraniu, aby chronić przed XSS.
    </pre>


    <form action="index.php" method="post">
        <label>
            Liczba wierszy (n &lt; 100):<br>
            <input type="number" name="n" required><br><br>
        </label>

        <label>
            Liczba kolumn (m &lt; 100):<br>
            <input type="number" name="m" required><br><br>
        </label>

        <label>
            Wartości (oddzielone przecinkami):<br>
            <textarea name="values" rows="4" cols="50" required></textarea><br><br>
        </label>

        <input type="submit" name="przycisk" value="Wyślij">
    </form>

</section>

<section>
    <?php
if (isset($_POST['przycisk'])) {

    $n = $_POST['n'];
    $m = $_POST['m'];
    $raw_values = $_POST['values'];

    echo "Wymiary tablicy: n = $n, m = $m<br>";
    echo "Wprowadzone liczby: " . htmlspecialchars($raw_values) . "<br><br>";

    if (!ctype_digit($n) || !ctype_digit($m) || $n <= 0 || $m <= 0 || $n >= 100 || $m >= 100) {
        echo "<span>n i m muszą być liczbami całkowitymi &lt; 100.</span>";
        return;
    }

    $n = (int)$n;
    $m = (int)$m;

    $arr = array_map('trim', explode(",", $raw_values));

    if (count($arr) != $n * $m) {
        echo "<span>Liczba wartości (" . count($arr) . ") nie zgadza się z n × m = " . ($n*$m) . ".</span>";
        return;
    }

    foreach ($arr as $v) {
        if (!is_numeric($v)) {
            echo "<span>Wartość '$v' nie jest liczbą.</span>";
            return;
        }
    }

    echo "<h3>Tablica $n × $m:</h3><table border='1' cellpadding='5'>";
    $i = 0;
    for ($r = 0; $r < $n; $r++) {
        echo "<tr>";
        for ($c = 0; $c < $m; $c++) {
            echo "<td>" . htmlspecialchars($arr[$i++]) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>

</section>

</body>
</html>
