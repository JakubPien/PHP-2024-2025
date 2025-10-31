<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>P75a</title>
</head>
<body>

<header>
    <h1>Zadanie P75a - liczby Fibonaciego</h1>
    <h2>Autor: Jakub Pieniężny 3p</h2>
</header>


<section>

    <p>
        Napisz program, który dla danej liczby całkowitej n wypisuje wyrazy ciągu Fibonacciego według zależności

        <img src="img.png" alt="wzór">
        Dla n=20 program powinien wypisać: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610, 987, 1597, 2584, 4181, 6765

        podaj liczbę n:
    </p>


    <form action="index.php" method="post">
        <fieldset >
            <label>
                Podaj liczbę n:
                <input type="number" name="n">
            </label>

    </form>

</section>

<section>
    <?php
    if (isset($_POST['n'])) {
       $n = htmlspecialchars($_POST['n']);



    }

    ?>
</section>

</body>
</html>
