<?php
$db = mysqli_connect("localhost", "root", "", "samochody")
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konfigurator samochodów</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

<header>
    <h1>Serwis konfiguracji samochodów</h1>
</header>

<nav>
    <h2>Samochody</h2>
    <h2>Konfigurator</h2>
    <h2>Kontakt</h2>
</nav>

<main>
    <section id="sec-left">
        <?php
            $query = "SELECT marka, model, cena, nazwa, doplata FROM pojazdy JOIN kolory ON kolory.id = pojazdy.kolor WHERE model = 'alfa'";
            $result = mysqli_query($db, $query);
            echo "<table>";
            while ($row = mysqli_fetch_assoc($result)) {
                $suma = $row['cena'] + $row['doplata'];
                echo "<tr>
                            <td>{$row['marka']}</td>
                            <td>{$row['model']}</td>
                            <td>{$row['nazwa']}</td>
                            <th>$suma</td>
                      </tr>";
            }
            echo "</table>"
        ?>
    </section>
    <section id="sec-mid">
        <table border="">
            <tr>
                <th colspan="2">Konfiguracja</th>
                <th>Cena</th>
            </tr>
            <tr>
                <td colspan="3"><img src="a1.jpg" alt="Konfiguracja 1"></td>
            </tr>
            <?php
                $query = "SELECT marka, model, cena FROM pojazdy ORDER BY RAND() LIMIT 2";
                $result = mysqli_query($db, $query);
                $row = mysqli_fetch_array($result);
                    echo "
                         <tr>
                            <td>Marka</td>
                            <td>$row[0]</td>
                            <td rowspan='2'>$row[2]</td>
                         </tr>
                         <tr>
                            <td>Model</td>
                            <td>$row[1]</td>
                         </tr>
                    ";
            ?>
            <tr>
                <td colspan="3"><img src="a2.jpg" alt="Konfiguracja 2"></td>
            </tr>
            <?php
            $row = mysqli_fetch_array($result);
            echo "
                         <tr>
                            <td>Marka</td>
                            <td>$row[0]</td>
                            <td rowspan='2'>$row[2]</td>
                         </tr>
                         <tr>
                            <td>Model</td>
                            <td>$row[1]</td>
                         </tr>
                    ";

            ?>
        </table>
    </section>
    <section id="sec-right">
        <h3>111 222 444</h3>
        <img src="a3.png" alt="Samochód">
    </section>
</main>

<footer>
    <p>Stronę wykonał: Jakub Pieniężny 3p</p>
</footer>

</body>
</html>

<?php
mysqli_close($db);