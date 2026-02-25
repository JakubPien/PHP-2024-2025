<?php
$db = mysqli_connect('localhost', 'root', '', 'medica');


?>

<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="obraz2.png">
    <title>Przychodnia Medica</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

<header>
    <h1>Abonamenty w przychodni Medica</h1>

<?php
$query1 = "SELECT nazwa, cena, opis FROM abonamenty";
$result = mysqli_query($db, $query1);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<h3>Pakiet {$row['nazwa']} - cena {$row['cena']}</h3>";
    echo "<p>{$row['opis']}</p>";
}
?>

    <a href="opis.html">Dowiedz się więcej</a>

</header>

<nav id="artykul">
</nav>

<nav id="b_glowny">

    <section id="s1">
        <h2>Standardowy</h2>
        <?php

        $query2 = "SELECT nazwa, cecha FROM abonamenty JOIN szczegolyabonamentu ON abonamenty.id = Abonamenty_id 
                    JOIN cechy ON cechy.id = Cechy_id WHERE abonamenty.id = 1";
        $result2 = mysqli_query($db, $query2);

        echo "<ul>";
        while ($row = mysqli_fetch_assoc($result2)) {
            echo "<li>{$row['cecha']}</li>";
        }
        echo "</ul>";

        ?>
    </section>

    <section id="s2">
        <h2>Premium</h2>
        <?php

        $query2 = "SELECT nazwa, cecha FROM abonamenty JOIN szczegolyabonamentu ON abonamenty.id = Abonamenty_id 
                    JOIN cechy ON cechy.id = Cechy_id WHERE abonamenty.id = 2";
        $result2 = mysqli_query($db, $query2);

        echo "<ul>";
        while ($row = mysqli_fetch_assoc($result2)) {
            echo "<li>{$row['cecha']}</li>";
        }
        echo "</ul>";

        ?>
    </section>

    <section id="s3">
        <h2>Dziecko</h2>
        <?php

        $query2 = "SELECT nazwa, cecha FROM abonamenty JOIN szczegolyabonamentu ON abonamenty.id = Abonamenty_id 
                    JOIN cechy ON cechy.id = Cechy_id WHERE abonamenty.id = 3";
        $result2 = mysqli_query($db, $query2);

        echo "<ul>";
        while ($row = mysqli_fetch_assoc($result2)) {
            echo "<li>{$row['cecha']}</li>";
        }
        echo "</ul>";

        ?>
    </section>

</nav>

<footer>
    <p><img src="obraz2.png" alt="przychodnia">Stronę przygotował: Jakub Pieniężny 3p</p>
</footer>


</body>
</html>

<?php
