
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>T51</title>
</head>
<body>

<header>
    <h1>Zadanie T51 - tablica asocjacyjna</h1>
    <h2>Autor: Jakub Pieniężny 2p</h2>
    <link rel="stylesheet" href="style.css">
</header>

<section>
    <p>Po zapoznaniu się  z materiałem napisz skrypt, w którym zdefiniuj tablicę asocjacyjną - 5-elementową. W tablicy indeksami są nazwy państw, a wartościami ich stolice.</p>

    <?php

    $panstwa_i_stolice = array(
        "Polska" => "Warszawa",
        "Niemcy" => "Berlin",
        "Francja" => "Paryż",
        "Włochy" => "Rzym",
        "Hiszpania" => "Madryt"
    );


    foreach ($panstwa_i_stolice as $panstwo => $stolica) {
        echo "Stolicą państwa <b>$panstwo</b> jest <b>$stolica</b>.<br>";
    }
    ?>
</section>

</body>
</html>