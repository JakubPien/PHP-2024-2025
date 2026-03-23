<?php
$db = mysqli_connect("localhost", "root", "", "dane2");
?>

<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grzybobranie</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>

<nav id="miniatury">
    <a href="borowik.jpg"><img src="borowik-miniatura.jpg" alt="Grzybobranie"></a>
</nav>

<nav id="tytulowy">
    <h1>Idziemy na grzyby!</h1>
</nav>

<nav id="lewy">
    <?php
    $query = "SELECT nazwa_pliku, potoczna FROM grzyby";
    $wynik = mysqli_query($db, $query);

    while ($row = mysqli_fetch_assoc($wynik)) {
        echo "<img src='{$row['nazwa_pliku']}' title='{$row['potoczna']}' alt='{$row['nazwa_pliku']}'>";
    }
    ?>
</nav>

<nav id="prawy">
    <h2>Grzyby jadalne</h2>
    <?php

    $query = "SELECT nazwa, potoczna FROM grzyby WHERE jadalny = true";
    $wynik = mysqli_query($db, $query);
    while ($row = mysqli_fetch_assoc($wynik)) {
        echo "<p>{$row['nazwa']} ({$row['potoczna']})</p>";
    }
    ?>
    <h2>Polecamy do sosów</h2>
    <?php
    $query = "SELECT grzyby.nazwa AS nazwa_g, potoczna, rodzina.nazwa AS nazwa_r FROM grzyby 
    JOIN rodzina ON grzyby.rodzina_id = rodzina.id JOIN potrawy ON grzyby.potrawy_id = potrawy.id WHERE potrawy.id = 1";

    $wynik = mysqli_query($db, $query);
    echo "<ol>";
    while ($row = mysqli_fetch_assoc($wynik)) {
        echo "<li>{$row['nazwa_g']} ({$row['potoczna']}), rodzina: {$row['nazwa_r']}</li>";
    }
    echo "</ol>";
    ?>
</nav>

<footer>
    <p>Autor: Jakub Pieniężny 3p</p>
</footer>


</body>
</html>

<?php
mysqli_close($db);
?>
