<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie P48e</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie P48e - tablica znaków i słowa</h1>
    <h2>Autor: Jakub Pieniężny 2p</h2>
</header>

<section>
    <pre>
        Napisz program w którym do jednowymiarowej tablicy znakowej wpisanych jest 10 znaków podanych przez użytkownika, a następnie:

pyta użytkownika o długość losowego słowa oraz ilość słów,
wyświetla wzorcową 10 znakową tablicę,
wyświetla podaną ilość słów składających się z podanej ilości znaków wygenerowanych ze znaków zapisanych w 10-elementowej tablicy stworzonej na początku programu.
    </pre>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text">
        <input type="submit" value="Wyślij">
    </form>
</section>


<section>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $tablicaZnakow = [];
    echo "Podaj 10 znaków:\n";
    for ($i = 0; $i < 10; $i++) {
        echo "Znak " . ($i + 1) . ": ";
        $znak = trim(fgets(STDIN));
    while (strlen($znak) !== 1) {
        echo "Podaj dokładnie jeden znak!\nZnak " . ($i + 1) . ": ";
        $znak = trim(fgets(STDIN));
    }
    $tablicaZnakow[] = $znak;
    }

    echo "Podaj długość jednego słowa: ";
    $dlugoscSlowa = (int)trim(fgets(STDIN));

    echo "Podaj ilość słów do wygenerowania: ";
    $iloscSlow = (int)trim(fgets(STDIN));

    echo "\nWzorcowa tablica znaków:\n";
    echo implode(" ", $tablicaZnakow) . "\n";

    echo "\nWygenerowane słowa:\n";
    for ($i = 0; $i < $iloscSlow; $i++) {
       $slowo = "";
       for ($j = 0; $j < $dlugoscSlowa; $j++) {
          $losowyIndex = rand(0, 9);
        $slowo .= $tablicaZnakow[$losowyIndex];
        }
     echo $slowo . "\n";
    }

    }
    ?>
</section>

</body>
</html>
