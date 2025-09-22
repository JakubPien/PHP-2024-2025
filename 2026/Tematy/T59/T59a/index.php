<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Zadanie T59</title>
</head>
<body>

<header>
    <h1>Zadanie T59a</h1>
    <h2>Autor: Jakub Pieniężny 3P</h2>
</header>

<section>
    <p>
        PHP zastosowanie plików cookies


        Napisz skrypt tworzący plik cookie wizyta - określający datę ostatnich odwiedzin strony przez użytkownika oraz skrypt odczytujący tę informację.

        CSS i inne szykany nie są obowiązkowe ;)
    </p>
</section>

<section>
    <?php

    $cookie_name = "ostatnio";
    if (isset($_COOKIE[$cookie_name])) {
        echo "Twoja ostatnia wizyta: ".  $_COOKIE[$cookie_name]. " <br>";
    } else {
        echo "Witej pierwszy raz na stronie";
    }

    $ostatnia = date("Y-m-d H:i:s");
    setcookie($cookie_name, $ostatnia, time() + (86400 * 30), "/");

    ?>
</section>

</body>
</html>
