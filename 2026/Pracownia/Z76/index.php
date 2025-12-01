<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Z76</title>
</head>
<body>

<header>
    <h1>Zadanie 76 - Od A do B</h1>
    <h2>Autor: Jakub Pieniężny 3p</h2>
</header>


<section>

    <pre>
        Napisz program, który dla podanych liczb całkowitych A i B wyświetla wszystkie liczby całkowite z przedziału od A do B oddzielone średnikami.
    </pre>


    <form action="index.php" method="post">
            <label>
                Podaj liczbę A: <br>
                <input type="number" name="numa"> <br>
                Podaj liczbę B: <br>
                <input type="number" name="numb"><br>
                <input type="submit" name="przycisk" value="Wyślij">
            </label>
    </form>

</section>

<section>
    <?php
    if (isset($_POST['przycisk'])) {
        $a = htmlspecialchars($_POST['numa']);
        $b = htmlspecialchars($_POST['numb']);

        echo "A = $a <br>";
        echo "B = $b <br>";
        if ($a > $b) {
            echo "A musi być mniejszę lub równe B";
        }   else {
            for (; $a <= $b; $a++) {
                if ($a != $b)
                    echo "$a;";
                else
                    echo "$a";
            }
        }
    }
    ?>
</section>

</body>
</html>
