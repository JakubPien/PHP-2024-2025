<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Z80</title>
</head>
<body>

<header>
    <h1>Zadanie Z80 - piramida</h1>
    <h2>Autor: Jakub Pieniężny 3p</h2>
</header>


<section>

    <pre>
Napisz program, który dla podanej liczby całkowitej A wyświetla piramidę znaków | o ilości wierszy równej A (maksymalna dopuszczalna wartość A = 50).
    </pre>


    <form action="index.php" method="post">
            <label>
                Podaj liczbę A: <br>
                <input type="number" name="num" max="50"> <br>
                <input type="submit" name="przycisk" value="Wyślij">
            </label>
    </form>

</section>

<section>
    <?php
    if (isset($_POST['przycisk'])) {
        $num = htmlspecialchars($_POST['num']);

        echo "A = $num <br>";

        for ($i = 1; $i <= $num; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "| ";
            } echo "<br>";
        }

    }
    ?>
</section>

</body>
</html>
