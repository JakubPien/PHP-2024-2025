<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie P48c</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie P48c - tablica dwuwymiarowa znaków</h1>
    <h2>Autor: Jakub Pieniężny 2p</h2>
</header>

<section><pre>
        Napisz program, który do dwuwymiarowej tablicy o wymiarach 7 x 7 wpisze wygenerowane losowo znaki ze zbioru:

!, @, #, $, %, ^, &, *, (, ),+, =

wyświetli tę tablicę,
wyświetli ile razy w tablicy wystąpił znak @
    </pre>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="submit" value="Wyślij">
    </form>
</section>


<section>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $znaki = array("!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "+", "=" );
        $n = 7;
        $m = 7;
        $x = 0;
        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $wylosowane[$i][$j] = $znaki[rand(0, 11)];
                echo ($wylosowane[$i][$j]." " );
                if ($wylosowane[$i][$j] == "@")
                    $x++;
            }
            echo "<br>";
        }
        echo ("Znak '@' został wylosowany $x razy");


    }
    ?>
</section>

</body>
</html>
