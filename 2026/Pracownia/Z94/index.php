<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Z94</title>
</head>
<body>

<header>
    <h1>Zadanie Z94 - max i indeksy w tablicy jednowymiar.</h1>
    <h2>Autor: Jakub Pieniężny 3p</h2>
</header>


<section>

    <pre>
        Napisz program, który wczytuje liczby całkowite do jednowymiarowej tablicy, wyświetla tę tablicę, wyświetla maksymalną wartość zapisaną w tablicy oraz wskaźniki elementów zawierających tę maksymalną wartość. Użytkownik wprowadza liczby do komponentu textarea oddzielone przecinkami. Program powinien zweryfikować, czy podane wartości są liczbami całkowitymi, a w odpowiedzi podać liczbę elementów, maksymalną wartość oraz indeksy elementów o tej wartości.

        Uwaga: Do wygenerowania liczb oddzielonych przecinkami możesz wykorzystać zadanie z85.

        Wskazówki dla ucznia:
        Użyj explode(), aby rozdzielić ciąg z textarea na tablicę liczb na podstawie przecinków.
        Zweryfikuj, czy każda wartość jest liczbą całkowitą za pomocą is_numeric() i sprawdzenia, czy po konwersji na int nie traci wartości dziesiętnej.
        Użyj max(), aby znaleźć maksymalną wartość, a następnie przeszukaj tablicę, aby znaleźć indeksy za pomocą pętli lub array_keys().
        Liczbę elementów uzyskaj za pomocą count().
        Zabezpiecz dane wejściowe za pomocą htmlspecialchars() przy pobieraniu, aby chronić przed XSS.
    </pre>


    <form action="index.php" method="post">
        <p>Wprowadź liczby całkowite oddzielone przecinkami:</p>
        <textarea name="values" rows="5" cols="40"></textarea><br><br>
        <input type="submit" value="Wyślij">
    </form>

</section>

<section>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $raw = htmlspecialchars($_POST["values"]);
        echo "<p>Wprowadzone liczby: $raw</p>";

        $arr = array_map('trim', explode(',', $_POST["values"]));

        foreach ($arr as $v) {
            if (!is_numeric($v) || (int)$v != $v) {
                echo "<p>Błąd: '$v' nie jest liczbą całkowitą.</p>";
                return;
            }
        }

        $arr = array_map('intval', $arr);
        $n = count($arr);
        $maxVal = max($arr);
        $indexes = array_keys($arr, $maxVal);

        echo "<p>Tablica jednowymiarowa ($n elementów):</p>";

        echo '<div class="blok">';
        for ($i = 0; $i < $n; $i++) {
            echo "<pre>tab[$i] = {$arr[$i]}</pre>";
        }
        echo '</div>';

        echo "<br><p>Liczba elementów: $n</p>";
        echo "<p>Maksymalna wartość: $maxVal</p>";
        echo "<p>Indeksy elementów z maksymalną wartością: " . implode(", ", $indexes) . "</p>";
    }
    ?>
</section>

</body>
</html>
