<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" type="image/png"  href="obraz2.png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Przychodnia Medica</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

<header>
    <h1>Abonamenty w przychodni Medica</h1>
</header>

<div class="artykul">

    <?php
    $db = mysqli_connect("localhost", "root", "", "3p_2_medica");
    $query = "SELECT nazwa, cena, opis FROM abonamenty";

    $result = mysqli_query($db, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<h3>Pakiet " . $row['nazwa'] . " - cena " . $row['cena'] . " zł </h3>";
        echo "<p>" . $row['opis'] . "</p>";
    }
    ?>
    <a href="opis.html">Dowiedz się więcej</a>
</div>

<div class="blok_glowny">
    <section id="sec1">
        <h2>Standardowy</h2>
        <?php
        $query = "SELECT nazwa, cecha FROM abonamenty JOIN szczegolyabonamentu ON abonamenty.id = Abonamenty_id JOIN cechy ON cechy.id = Cechy_id WHERE abonamenty.id = 1";

        $result = mysqli_query($db, $query);

        echo "<ul>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li>";
            echo $row['cecha'];
            echo "</li>";
        }
        echo "</ul>";
        ?>
    </section>
    <section id="sec2">
        <h2>Premium</h2>
        <?php
        $query = "SELECT nazwa, cecha FROM abonamenty JOIN szczegolyabonamentu ON abonamenty.id = Abonamenty_id JOIN cechy ON cechy.id = Cechy_id WHERE abonamenty.id = 2";

        $result = mysqli_query($db, $query);

        echo "<ul>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li>";
            echo $row['cecha'];
            echo "</li>";
        }
        echo "</ul>";
        ?>
    </section>
    <section id="sec3">
        <h2>Dziecko</h2>
        <?php
        $query = "SELECT nazwa, cecha FROM abonamenty JOIN szczegolyabonamentu ON abonamenty.id = Abonamenty_id JOIN cechy ON cechy.id = Cechy_id WHERE abonamenty.id = 3";

        $result = mysqli_query($db, $query);

        echo "<ul>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li>";
            echo $row['cecha'];
            echo "</li>";
        }
        echo "</ul>";
        mysqli_close($db);
        ?>
    </section>
</div>

<footer>
    <p>
        <img src="obraz2.png" alt="przychodnia">
        Stronę przygotował: Jakub Pieniężny 3p
    </p>
</footer>

</body>
</html>



