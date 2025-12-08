<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Z93</title>
</head>
<body>

<header>
    <h1>Zadanie Z93 - max w tablicy jednowymiar.</h1>
    <h2>Autor: Jakub Pieniężny 3p</h2>
</header>


<section>

    <pre>
       Napisz program, który wczytuje liczby całkowite do jednowymiarowej tablicy, wyświetla tę tablicę i wyświetla maksymalną wartość zapisaną w tablicy. Użytkownik wprowadza liczby do komponentu textarea oddzielone przecinkami. Program powinien zweryfikować, czy podane wartości są liczbami całkowitymi, a w odpowiedzi podać liczbę elementów w tablicy oraz maksymalną wartość.

        Wskazówki dla ucznia:
        Użyj explode(), aby rozdzielić ciąg z textarea na tablicę liczb na podstawie przecinków.
        Zweryfikuj, czy każda wartość jest liczbą całkowitą za pomocą is_numeric() i sprawdzenia, czy po konwersji na int nie traci wartości dziesiętnej.
        Użyj funkcji max(), aby znaleźć maksymalną wartość w tablicy.
        Liczbę elementów uzyskaj za pomocą count().
        Zabezpiecz dane wejściowe za pomocą htmlspecialchars() przy pobieraniu, aby chronić przed XSS.
    </pre>


    <form action="index.php" method="POST">
        <h3>Wprowadź liczby całkowite oddzielone przecinkami:</h3>
        <textarea name="values" rows="5" cols="40"></textarea><br><br>
        <input type="submit" value="Wyślij">
    </form>

</section>

<section>
    <?php
    if (isset($_POST['submit'])) {

        $raw = htmlspecialchars($_POST['values']);
        echo "<p>Wprowadzone wartości: $raw</p>";

        $arr = array_map('trim', explode(",", $_POST['values']));

        foreach ($arr as $v) {
            if (!is_numeric($v) || (int)$v != $v) {
                echo "<p>Błąd: '$v' nie jest liczbą całkowitą.</p>";
                return;
            }
        }

        $intArr = array_map('intval', $arr);

        echo "<p>Tablica: [" . implode(", ", $intArr) . "]</p>";
        echo "<p>Liczba elementów: " . count($intArr) . "</p>";
        echo "<p>Maksymalna wartość: " . max($intArr) . "</p>";
    }
    ?>
</section>

</body>
</html>
