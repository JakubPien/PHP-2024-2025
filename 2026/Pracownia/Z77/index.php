<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Z77</title>
</head>
<body>

<header>
    <h1>Zadanie Z77 - od mniejszej do większej</h1>
    <h2>Autor: Jakub Pieniężny 3p</h2>
</header>


<section>

    <pre>
      Napisz program, który dla podanych liczb całkowitych A i B wyświetla liczby od A do B, gdy A < B, lub od B do A, gdy B < A.
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

        if ($b > $a) {
            for (; $a <= $b; $a++) {
                if ($a != $b)
                    echo "$a;";
                else
                    echo "$a";
            }
        } else {
            for (; $b <= $a; $b++) {
                if ($b != $a)
                    echo "$b;";
                else
                    echo "$b";
            }
        }

    }
    ?>
</section>

</body>
</html>
