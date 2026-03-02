<?php
$db = mysqli_connect("localhost", "root", "", "opony");

header("Refresh: 10");

?>

<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OPONY</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

<nav id="bg">
    <nav id="bb">
        <?php
        $query1 = "SELECT * FROM opony ORDER BY cena LIMIT 10;";
        $wynik1 = mysqli_query($db, $query1);

        while ($rekord = mysqli_fetch_assoc($wynik1)) {

            echo "<div class='opona'>";

            if ($rekord['sezon'] == "letnia") {
                echo "<img src='lato.png' alt='Opona letnia'>";
            } else if ($rekord['sezon'] == "zimowa") {
                echo "<img src='zima.png' alt='Opona zimowa'>";
            } else if ($rekord['sezon'] == "uniwersalna") {
                echo "<img src='uniwer.png' alt='Opona uniwersalna'>";
            }

            echo "<h4>Opona: {$rekord['producent']} {$rekord['model']} </h4>";
            echo "<h3>Cena: {$rekord['cena']} </h3>";

            echo "</div>";
        }
        ?>
        <p><a href="https://opna.pl/">więcej ofert</a></p>
    </nav>

    <section id="sec1">
        <img src="opona.png" alt="Opona">
        <h2>Opona dnia</h2>
        <?php
      $query2 = "SELECT producent, model, sezon, cena FROM opony WHERE nr_kat = 9;";
        $wynik2 = mysqli_query($db, $query2);

        $rekord2 = mysqli_fetch_assoc($wynik2);

        echo "<h2>" . $rekord2['producent'] . " model " . $rekord2['model'] . "</h2>";
        echo "<h2>Sezon: " . $rekord2['sezon'] . "</h2>";
        echo "<h2>Tylko " . $rekord2['cena'] . " zł!</h2>";
        ?>
    </section>

    <section id="sec2">
        <h2>Najnowsze zamówienie</h2>
        <?php
        $query3 = "SELECT zamowienie.id_zam, zamowienie.ilosc, opony.model, opony.cena FROM zamowienie JOIN opony ON zamowienie.nr_kat = opony.nr_kat ORDER BY RAND() LIMIT 1;";

        $wynik3 = mysqli_query($db, $query3);
        $rekord3 = mysqli_fetch_assoc($wynik3);

        $wartosc = $rekord3['ilosc'] * $rekord3['cena'];

        echo "<h2>{$rekord3['id_zam']} {$rekord3['ilosc']} sztuki modelu {$rekord3['model']}</h2>";
        echo "<h2>Wartość zamówienia " . $wartosc . " zł</h2>";
        ?>
    </section>
</nav>


<footer>
    <p>Stronę wykonał: Jakub Pieniężny 3p</p>
</footer>


</body>
</html>

<?php
mysqli_close($db);
?>
