
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>T51a</title>
</head>
<body>

<header>
    <h1>Zadanie T51a - liczba odkryta</h1>
    <h2>Autor: Jakub Pieniężny 2p</h2>
    <link rel="stylesheet" href="style.css">
</header>

<section>
   <pre>
       Liczba odkryta
Liczbą odkrytą nazywamy liczbę całkowitą większą od 0, której wartość jest podzielna przez każdą cyfrę różną od zera, z której się składa
       jej zapis. Jeśli liczba całkowita jest zapisana w systemie liczbowym o podstawie p, gdzie 2≤p≤10, to jest ona liczbą odkrytą, jeśli
       jej wartość w systemie dziesiętnym jest podzielna przez każdą cyfrę różną od zera, z której się składa jej zapis
       w systemie o podstawie p.

Przykłady:

Dla p=10 liczbą odkrytą jest liczba 24, ponieważ dzieli się przez 2 oraz 4, natomiast przykładem liczby nieodkrytej jest liczba 26
       ponieważ dzieli się przez 2, ale nie dzieli się przez 6.

Napisz funkcję w języku PHP, która dla podanej liczby dziesiętnej większej od 0 zwraca TRUE, gdy liczba jest odkryta i FALSE
       w przeciwnym wypadku.
   </pre>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="p">Podaj p:</label>
        <input type="number" id="p" name="p" required><br><br>

        <input type="submit" value="Wyślij">
    </form>

</section>

<section>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $p = $_POST["p"];
        $x = floor($p / 10);
        $y = $p - $x * 10;


        function liczba_odkryta($x, $y, $p)
        {
            if ($x > 0 && $y > 0) {
                if ($p % $x == 0 && $p % $y == 0) {
                    return true;
                }
            }
            return false;
        }
        if (liczba_odkryta($x, $y, $p) == false) {
            echo "Liczba $p jest liczbą nieodkrytą";
        } else {
            echo "Liczba $p jest liczbą odkrytą";
        }



    }
    ?>
</section>

</body>
</html>