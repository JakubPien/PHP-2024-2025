
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>T552</title>
</head>
<body>

<header>
    <h1>Zadanie T552</h1>
    <h2>Autor: Jakub Pieniężny 2p</h2>
    <link rel="stylesheet" href="style.css">
</header>

<section>
    <p>
        Dana jest tablica zawierająca imiona. Napisz funkcję, która wypisuje ilość imion żeńskich zapisanych w tablicy. Dla uproszczenia zakładamy, że imiona żeńskie to te, które kończą się na literę "a". Proszę uwzględnić imiona Kuba i Barnaba.
    </p>
    <form method="post">
        <input type="text" name="names" placeholder="Np. Anna, Marek, Ola, Kuba" style="width: 300px;" required>
        <br><br>
        <input type="submit" value="Policz imiona żeńskie">
    </form>

</section>

<section>

    <?php
        function policzImionaZenskie($tablicaImion)
        {
            $ile = 0;
            foreach ($tablicaImion as $imie) {
                $imie = trim($imie);
                if (
                    substr($imie, -1) === 'a' &&
                    !in_array(strtolower($imie), ['kuba', 'barnaba'])
                ) {
                    $ile++;
                }
            }
            return $ile;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST["names"];
            $imiona = explode(",", $input);
            $iloscZenskich = policzImionaZenskie($imiona);

            echo "<h2>Liczba imion żeńskich: $iloscZenskich</h2>";
        }
    ?>
</section>

</body>
</html>