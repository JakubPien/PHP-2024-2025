<?php
$db = mysqli_connect("localhost", "root", "", "matura")
?>

<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matura</title>
    <link rel="stylesheet" href="styl.css">
</head>
    <body>

    <header>
        <h1>System informacji dla maturzystów</h1>
    </header>

    <aside>
        <img src="ma.jpg" alt="Matura">
        <img src="tu.jpg" alt="Matura">
        <img src="ra.jpg" alt="Matura">
    </aside>

    <section id="sec_1">
        <?php
            $id = $_GET['id'];
            $imie = $_GET['imie'];
            $nazwisko = $_GET['nazwisko'];

            $query = "SELECT rok, sesja, przedmiot, punkty FROM arkusz JOIN wynik ON arkusz.symbol = wynik.symbol WHERE maturzysta_id = $id";
            $result = mysqli_query($db, $query);
            while($row = mysqli_fetch_assoc($result)) {
                echo "<h3>{$row['rok']} {$row['sesja']} </h3>
                      <p>{$row['przedmiot']}: {$row['punkty']}</p>
                      ";
            }
        ?>
    </section>

    <section id="sec_2">
        <div class="bloki">
            <div">
            <h4>Przedmioty</h4>
            <p>
                <?php
                $query = "SELECT DISTINCT przedmiot FROM arkusz";
                $result = mysqli_query($db, $query);
                while($row = mysqli_fetch_assoc($result)) {
                    echo "{$row['przedmiot']} ";
                }
                ?>
            </p>
        </div>
        <div class="bloki">
            <h4>Lata</h4>
            <p>
                <?php
                $query = "SELECT MAX(rok) AS 'Najstarszy', MIN(rok)  AS 'Najnowszy' FROM arkusz";
                $result = mysqli_query($db, $query);
                $row = mysqli_fetch_assoc($result);
                echo "{$row['Najnowszy']} - {$row['Najstarszy']} ";
                ?>
            </p>
        </div>
        <div class="bloki">
            <h4>Najlepszy wynik</h4>
            <p>
                <?php
                $query = "SELECT maturzysta_id AS id, AVG(punkty) AS Wynik FROM wynik GROUP BY maturzysta_id ORDER BY Wynik DESC LIMIT 1;";
                $result = mysqli_query($db, $query);
                $row = mysqli_fetch_assoc($result);
                echo "{$row['Wynik']}%";
                ?>
            </p>
        </div>
        <div class="bloki">
            <h4>Najgorszy wynik</h4>
            <p>
                <?php
                $query = "SELECT maturzysta_id AS id, AVG(punkty) AS Wynik FROM wynik GROUP BY maturzysta_id ORDER BY Wynik ASC LIMIT 1;";
                $result = mysqli_query($db, $query);
                $row = mysqli_fetch_assoc($result);
                echo "{$row['Wynik']}%";
                ?>
            </p>
        </div>
    </section>

    <footer>
        <p>Stronę wykonał: Jakub Pieniężny 3p</p>
    </footer>

    </body>
    </html>

<?php
mysqli_close($db);