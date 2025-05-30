
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>T551</title>
</head>
<body>

<header>
    <h1>Zadanie T551</h1>
    <h2>Autor: Jakub Pieniężny 2p</h2>
    <link rel="stylesheet" href="style.css">
</header>

<section>
   <p>
      Dana jest tablica zawierająca liczby. Napisz funkcję, która po otrzymaniu tej tablicy jako argumentu zwraca sumę dwóch najmniejszych liczb zapisanych w tablicy.
   </p>

    <form method="post">
        <label>Tablica liczb:</label><br>
        <input type="text" name="numbers" placeholder="Np. 5, 2, 8, 1, 3" required style="width: 300px;"><br><br>
        <input type="submit" value="Oblicz">
    </form>

</section>

<section>

    <?php

        function sumaDwochNajmniejszych($tablica) {
            sort($tablica);
            return $tablica[0] + $tablica[1];
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST["numbers"];
            $elements = array_map('trim', explode(",", $input));
            $numbers = [];


            foreach ($elements as $el) {
                if (is_numeric($el)) {
                    $numbers[] = (float)$el;
                }
            }

            if (count($numbers) < 2) {
                echo "<p style='color:red;'>Podaj co najmniej dwie liczby.</p>";
            } else {
                $suma = sumaDwochNajmniejszych($numbers);
                echo "<h3>Suma dwóch najmniejszych liczb wynosi: $suma</h3>";
            }

    }
    ?>
</section>

</body>
</html>