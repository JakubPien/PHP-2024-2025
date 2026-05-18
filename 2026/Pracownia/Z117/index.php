<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 117</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Zadanie 117</h1>
    <h2>Autor: Jakub Pieniężny 3P</h2>
</header>

<section>
    <p>
        Napisz program, który dla danej liczby n podanej przez użytkownika wyświetla wszystkie liczby pierwsze mniejsze lub równe n . Liczba pierwsza to liczba naturalna większa od 1, która dzieli się tylko przez 1 i samą siebie. Użytkownik wprowadza n w formularzu, a program weryfikuje, czy jest to liczba całkowita dodatnia, znajduje liczby pierwsze i wyświetla je w czytelny sposób.
    </p>

    <ul>
        <li>Zweryfikuj, czy n jest liczbą całkowitą dodatnią za pomocą is_numeric() i sprawdzenia, czy po konwersji na int nie traci wartości.</li>
        <li>Sprawdź, czy n jest większe od 1, ponieważ liczby pierwsze zaczynają się od 2.</li>
        <li>Dla każdej liczby od 2 do n sprawdź, czy jest pierwsza, testując podzielność przez liczby nieparzyste od 3 do pierwiastka z tej liczby, pomijając liczby parzyste (oprócz 2).</li>
        <li>Jeśli n jest bardzo duże, rozważ użycie Sita Eratostenesa, ale pamiętaj o ograniczeniach pamięci – możesz dodać limit na n (np n <= 1000000).</li>
        <li>Wyświetl liczby pierwsze w elemencie <,pre> dla zachowania formatowania.</li>
        <li>Zabezpiecz dane wejściowe za pomocą htmlspecialchars() przy pobieraniu, aby chronić przed XSS.        </li>
    </ul>

    <fieldset>

        <form method="POST">

            <label for="liczba">Wprowadź liczbę:</label> <br>
            <input type="text" id="liczba" name="liczba"> <br><br>
            <button type="submit">Znajdź liczby pierwsze</button>

        </form>

    </fieldset>
</section>

<section class="wynik">

    <?php

    $wynik = "";
    $liczby = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $n = htmlspecialchars($_POST["liczba"]);

        if ($n === "" || !is_numeric($n)) {

            $wynik = "Rezultat: n musi być liczbą.";

        }
        elseif ((int)$n != $n) {

            $wynik = "Rezultat: n musi być liczbą całkowitą.";

        }
        elseif ($n < 2) {

            $wynik = "Rezultat: n musi być większe od 1.";

        }
        else {

            $wynik = "Liczby pierwsze mniejsze lub równe $n:";

            for ($i = 2; $i <= $n; $i++) {

                $pierwsza = true;

                if ($i == 2) {
                    $pierwsza = true;
                }

                elseif ($i % 2 == 0) {
                    $pierwsza = false;
                }

                else {

                    for ($j = 3; $j <= sqrt($i); $j += 2) {

                        if ($i % $j == 0) {
                            $pierwsza = false;
                            break;
                        }
                    }
                }

                if ($pierwsza) {
                    $liczby .= $i . ", ";
                }
            }

            $liczby = rtrim($liczby, ", ");
        }

        echo "<p>Liczba n = $n</p>";
        echo "<p><strong>$wynik</strong></p>";
        echo "<pre>$liczby</pre>";
    }

    ?>

</section>

</body>
</html>