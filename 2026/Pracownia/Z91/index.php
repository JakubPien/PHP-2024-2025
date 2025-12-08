<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Z91</title>
</head>
<body>

<header>
    <h1>Zadanie Z91 - tablica jednowymiarowa</h1>
    <h2>Autor: Jakub Pieniężny 3p</h2>
</header>


<section>

    <pre>
        Napisz program, który wczytuje n liczb całkowitych do jednowymiarowej tablicy i wyświetla tę tablicę. Wartość n<100 podaje użytkownik. Liczby należy wprowadzić do komponentu textarea oddzielone przecinkami. Program powinien zweryfikować, czy n jest liczbą całkowitą mniejszą od 100, czy podane wartości są liczbami całkowitymi, oraz czy ich liczba zgadza się z n, a następnie wyświetlić tablicę w czytelny sposób.

        Wskazówki dla ucznia:
        Sprawdź, czy n jest liczbą całkowitą (is_numeric() i is_int() po konwersji) oraz czy jest mniejsze od 100.
        Użyj explode(), aby rozdzielić ciąg z textarea na tablicę liczb na podstawie przecinków.
        Zweryfikuj, czy każda wartość jest liczbą całkowitą za pomocą is_numeric() i sprawdzenia, czy po konwersji na int nie traci wartości dziesiętnej.
        Sprawdź, czy liczba wprowadzonych wartości zgadza się z n.
        Zabezpiecz dane wejściowe za pomocą htmlspecialchars() przy pobieraniu, aby chronić przed XSS.


    </pre>


    <form action="index.php" method="post">
            <label>
                Liczba elementów: <br>
                <input type="number" name="lnum"> <br>
                Wartości tablicy (liczby całkowite oddzielone przecinkami): <br>
                <input type="text" name="numtab"> <br>
                <input type="submit" name="przycisk" value="Wyślij">
            </label>
    </form>

</section>

<section>
    <?php
if (isset($_POST['przycisk'])) {

    $n = htmlspecialchars($_POST['lnum']);
    $tab = htmlspecialchars($_POST['numtab']);

    $error = null;

    if ($n === "" || !is_numeric($n) || (int)$n != $n || $n >= 100 || $n <= 0) {
        $error = "n musi być liczbą.";
    } else {
        $n = (int)$n;
    }

    $elements = array_map('trim', explode(',', $tab));

    if (!$error) {
        if (count($elements) != $n) {
            $error = "Liczba wprowadzonych wartości (" . count($elements) . ") nie zgadza się z n ($n).";
        } else {
            foreach ($elements as $e) {
                if (!is_numeric($e) || (int)$e != $e) {
                    $error = "Wartość '$e' nie jest liczbą całkowitą.";
                    break;
                }
            }
        }
    }

    echo "Liczba elementów: n = $n<br>";
    echo "Wprowadzone liczby: $tab<br>";

    if ($error) {
        echo "Rezultat: <span>$error</span><br>";
    } else {
        echo "Tablica jednowymiarowa ($n elementów):<br><pre>";
        foreach ($elements as $e) printf("%6d", (int)$e);
        echo "</pre>";
    }
}
?>

</section>

</body>
</html>
