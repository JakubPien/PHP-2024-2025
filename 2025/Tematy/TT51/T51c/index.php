
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>T51c</title>
</head>
<body>

<header>
    <h1>Zadanie T51c Funkcja działająca na tablicy</h1>
    <h2>Autor: Jakub Pieniężny 2p</h2>
    <link rel="stylesheet" href="style.css">
</header>

<section>
  <pre>
      Dana jest tablica tab zawierająca liczby oraz liczba m o określonej wartości.

Napisz funkcję, która

wyświetli tablicę w formie tabeli HTML,
przemnoży wszystkie elementy tablicy tab przez czynnik m.
zamieni wszystkie elementy w tablicy równe 0 na 1.
Zademonstruj działanie funkcji w programie.
  </pre>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="m">Podaj wartosc m:</label>
        <input type="number" id="m" name="m" required><br><br>

    <input type="submit" value="Wyślij">
    </form>
</section>

<section>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $m = $_POST["m"];

        $tab = [
            [0, 2, 1],
            [1, 6, 0],
            [7, 3, 9]
        ];


        function zadania($tab,$m)
        {
            echo "Wartość m = $m<br>";
            echo "Przed zmianą.<br>";
            echo "<table border='1'";
            foreach ($tab as $wiersz) {
                echo "<tr>";
                foreach ($wiersz as $komorka) {
                    echo "<td>" . htmlspecialchars($komorka) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            echo "<br>";
            foreach ($tab as $i => $wiersz) {
                foreach ($wiersz as $j => $wartosc) {
                    $nowa = $wartosc * $m;
                    if ($nowa == 0) {
                        $nowa = 1;
                    }
                    $tab[$i][$j] = $nowa;

                }
            }
            echo "Po zmianie.<br>";
            echo "<table border='1'>";
            foreach ($tab as $wiersz) {
                echo "<tr>";
                foreach ($wiersz as $komorka) {
                    echo "<td>" . htmlspecialchars($komorka) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }


        zadania($tab, $m);
    }

    ?>
</section>

</body>
</html>