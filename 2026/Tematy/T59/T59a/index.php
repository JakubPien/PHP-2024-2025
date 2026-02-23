<?php
$cookie_name = "ostatnio";

if (isset($_COOKIE[$cookie_name])) {
    $komunikat = "Twoja ostatnia wizyta: " . $_COOKIE[$cookie_name];
} else {
    $komunikat = "Witaj pierwszy raz na stronie";
}

$ostatnia = date("Y-m-d H:i:s");
setcookie($cookie_name, $ostatnia, time() + (86400 * 30)); // 30 dni
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie T59</title>
</head>
<body>

<header>
    <h1>Zadanie T59a</h1>
    <h2>Autor: Jakub Pieniężny 3P</h2>
</header>

<section>
    <p>
        PHP zastosowanie plików cookies<br>
        Napisz skrypt tworzący plik cookie z datą ostatniej wizyty i odczytujący go.
    </p>
</section>

<section>
    <?php
    echo $komunikat;
    ?>
</section>

</body>
</html>
