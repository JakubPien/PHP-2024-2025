<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Motocykle</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
<img src="motor.png" alt="motocykl">

<div id="baner">
    <h1>Motocykle - moja pasja</h1>
</div>


<div id="lewy">

    <?php

    ?>

    <h2>Gdzie pojechać?</h2> // skrypt 1 \\
    <dl>

    </dl>
</div>

<div id="prawy_1">
    <h2>Co kupić?</h2>
    <ol>
        <li>Honda CBR125R</li>
        <li>Yamaha YBR125</li>
        <li>Honda VFR800i</li>
        <li>Honda CBR1100XX</li>
        <li>BMW R1200GS LC</li>
    </ol>
</div>

<div id="prawy_2">
    <h2>Statystyki</h2>
    <p>Wpisanych wycieczek: </p>

    <?php
    $db = mysqli_connect("localhost", "root", "", "3p_2_motory");
    echo mysqli_query($db, "SELECT COUNT(*) AS ilosc FROM wycieczki;");

    ?>

    <p>Użytkowników forum: 200</p>
    <p>Przesłanych zdjęć: 1300</p>
</div>

<div id="stopka">
    <p>Stronę wykonał: Jakub Pieniężny 3p</p>
</div>

</body>
</html>

<?php

?>

