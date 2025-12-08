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
    <h1>Zadanie Z95 - max w tablicy dwuwymiarowej.</h1>
    <h2>Autor: Jakub Pieniężny 3p</h2>
</header>


<section>

    <pre>
      Napisz program, który wczytuje liczby całkowite do tablicy o wymiarach n x m, wyświetla tę tablicę i wyświetla maksymalną wartość zapisaną w tablicy. Użytkownik podaje n i m oraz wprowadza liczby do komponentu textarea oddzielone przecinkami. Program powinien zweryfikować, czy n i m są liczbami całkowitymi, czy podane wartości są liczbami całkowitymi, oraz czy ich liczba zgadza się z n x m, a następnie wyświetlić tablicę w czytelny sposób wraz z maksymalną wartością.

        Uwaga: Do wygenerowania liczb oddzielonych przecinkami możesz wykorzystać zadanie z85.

        Wskazówki dla ucznia:
        Sprawdź, czy n i m są liczbami całkowitymi (is_numeric() i is_int() po konwersji).
        Użyj explode(), aby rozdzielić ciąg z textarea na tablicę liczb na podstawie przecinków.
        Zweryfikuj, czy każda wartość jest liczbą całkowitą za pomocą is_numeric() i sprawdzenia, czy po konwersji na int nie traci wartości dziesiętnej.
        Przekształć jednowymiarową tablicę na dwuwymiarową, rozdzielając ją na wiersze po m elementów.
        Użyj max() na spłaszczonej tablicy, aby znaleźć maksymalną wartość.
        Zabezpiecz dane wejściowe za pomocą htmlspecialchars() przy pobieraniu, aby chronić przed XSS.
    </pre>


    <form action="index.php" method="POST">
        <label>
            Liczba wierszy (n):<br>
            <input type="number" name="n" required><br><br>
        </label>

        <label>
            Liczba kolumn (m):<br>
            <input type="number" name="m" required><br><br>
        </label>

        <label>
            Wartości (oddzielone przecinkami):<br>
            <textarea name="values" rows="4" cols="50" required></textarea><br><br>
        </label>

        <input type="submit" value="Wyślij">
    </form>

</section>

<section>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $n = (int)$_POST["n"];
        $m = (int)$_POST["m"];
        $raw = htmlspecialchars($_POST["values"]);

        echo "<b>Wprowadzone liczby:</b> $raw<br>";

        $a = array_map('trim', explode(',', $_POST["values"]));

        foreach ($a as $v)
            if (!is_numeric($v) || (int)$v != $v) {
                echo "Niepoprawna wartość: $v";
                return;
            }

        $a = array_map('intval', $a);

        if (count($a) != $n * $m) {
            echo "Zła liczba elementów";
            return;
        }

        $t = array_chunk($a, $m);

        $max = max($a);


        echo "<p><b>Tablica ($n x $m):</b></p>";
        echo "<table>";

        for ($i = 0; $i < $n; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $m; $j++) {

                $val = $t[$i][$j];

                echo "<td> $val </td>";
            }
            echo "</tr>";
        }

        echo "</table><br>";

        echo "Liczba elementów: " . ($n * $m) . "<br>";
        echo "Maksymalna wartość: $max<br>";
    }
    ?>
</section>

</body>
</html>
