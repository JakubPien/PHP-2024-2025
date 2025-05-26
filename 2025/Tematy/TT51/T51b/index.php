
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>T51b</title>
</head>
<body>

<header>
    <h1>Zadanie T51b - szachownica</h1>
    <h2>Autor: Jakub Pieniężny 2p</h2>
    <link rel="stylesheet" href="style.css">
</header>

<section>
    <pre>
        Napisz kod php z funkcją szachownica($a). Funkcja przyjmuje jeden parametr. który określa ilość kratek w wierszu i kolumnie.

Wywołanie funkcji szachownica(6) powinno spowodować taki efekt:
    </pre>
    <img src="img.png" alt="">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="a">Podaj ilość kafelków w wierszu:</label>
        <input type="number" id="a" name="a" required><br><br>

        <input type="submit" value="Wyślij">
    </form>

</section>

<section>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["a"];



    function szachownica($a)
    {
        $size = 50;
        echo "<div style='width:" . ($a * $size) . "px;'>";
        for ($i = 0; $i < $a; $i++) {
            for ($j = 0; $j < $a; $j++) {
                $color = ($i + $j) % 2 == 0 ? "yellow" : "blue";
                echo "<div style='width:{$size}px; height:{$size}px; background-color:{$color}; float:left;'></div>";
            }
        }
        echo "<div style='clear:both;'></div></div>";
    }


        szachownica($a);
    }
    ?>
</section>

</body>
</html>