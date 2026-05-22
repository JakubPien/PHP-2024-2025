<?php
    $db = mysqli_connect("localhost", "root", "", "smoki");
?>

<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smoki</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

<header>
    <h2>Poznaj smoki!</h2>
</header>

<nav id="bn">
    <nav id="b1" onclick="showSec(1)">
        Baza
    </nav>
    <nav id="b2" onclick="showSec(2)">
        Opisy
    </nav>
    <nav id="b3" onclick="showSec(3)">
        Galeria
    </nav>
</nav>

    <nav id="bg">
        <section id="sec1">
            <h3>Baza Smoków</h3>

            <form action="smoki.php" method="post">
                <?php
                $query = "SELECT DISTINCT pochodzenie FROM smok ORDER BY pochodzenie ASC";
                $result = mysqli_query($db, $query);

                echo "<select name='pochodzenie'>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='{$row['pochodzenie']}' >{$row['pochodzenie']}</option>";
                }
                echo "</select>";
                ?>

                <button name="btn">Szukaj</button>
                <?php
                if (isset($_POST["btn"])) {
                    $pochodzenie = $_POST["pochodzenie"];

                    $query = "SELECT * FROM smok WHERE pochodzenie = '$pochodzenie'";
                    $result = mysqli_query($db, $query);

                    echo "<table >";
                    echo "<tr><th>Nazwa</th><th>Dlugosc</th><th>Szerokosc</th></tr>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>{$row['nazwa']}</td>";
                        echo "<td>{$row['dlugosc']}</td>";
                        echo "<td>{$row['szerokosc']}</td></tr>";
                    }
                    echo "</table>";
                }
                ?>
            </form>
        </section>

        <section id="sec2">
                <h3>Opisy smoków</h3>

                <dl>
                    <dt>Smok czerwony</dt>
                    <dd>
                        Pochodzi z Chin. Ma 1000 lat. Żywi się mniejszymi zwierzętami.
                        Posiada łuski cenne na rynkach wschodnich do wyrabiania lekarstw.
                        Jest dziki i groźny.
                    </dd>

                    <dt>Smok zielony</dt>
                    <dd>
                        Pochodzi z Bułgarii. Ma 10000 lat. Żywi się mniejszymi zwierzętami,
                        ale tylko w kolorze zielonym. Jest kosmaty. Z sierści zgubionej przez
                        niego tka się najdroższe materiały.
                    </dd>

                    <dt>Smok niebieski</dt>
                    <dd>
                        Pochodzi z Francji. Ma 100 lat. Żywi się owocami morza.
                        Jest natchnieniem dla najlepszych malarzy. Często im pozuje.
                        Jest przyjacielem ludzi, ale jest też próżny.
                    </dd>
                </dl>
        </section>

        <section id="sec3">
            <h3>Galeria</h3>
            <img src="smok1.JPG" alt="Smok czerwony">
            <img src="smok2.JPG" alt="Smok wielki">
            <img src="smok3.JPG" alt="Skrzydlaty łaciaty">
        </section>
    </nav>



<footer>
    <p>Stronę opracował: Jakub Pieniężny 3p</p>
</footer>

</body>
</html>

<?php
mysqli_close($db);
?>

<script>
    function showSec(numer) {
        const b1 = document.getElementById("b1");
        const b2 = document.getElementById("b2");
        const b3 = document.getElementById("b3");

        const sec1 = document.getElementById("sec1");
        const sec2 = document.getElementById("sec2");
        const sec3   = document.getElementById("sec3");

        b1.style.backgroundColor = "#FFAEA5";
        b2.style.backgroundColor = "#FFAEA5";
        b3.style.backgroundColor = "#FFAEA5";
        sec1.style.display = "none";
        sec2.style.display = "none";
        sec3.style.display = "none";

        if (numer === 1) {
            b1.style.backgroundColor = "MistyRose";
            sec1.style.display = "block";
        } else if (numer === 2) {
            b2.style.backgroundColor = "MistyRose";
            sec2.style.display = "block";
        } else if (numer === 3) {
            b3.style.backgroundColor = "MistyRose";
            sec3.style.display = "block";
        }
    }
</script>
