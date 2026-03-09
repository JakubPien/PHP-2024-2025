<?php
$db = mysqli_connect("localhost", "root", "", "szkolenia");
?>

<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styl.css">
    <title>Szkolenia i kursy</title>
</head>
<body>

<header>
    <h1>SZKOLENIA</h1>
</header>

<nav id="bg">

    <section id="secl">
        <table>
            <th>Kurs</th><th>Nazwa</th><th>Cena</th>
            <?php
            $query = "SELECT kod, nazwa, cena FROM kursy ORDER BY cena";

            $result = mysqli_query($db, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td><img src='{$row['kod']}.jpg' alt='kurs'></td>";
                echo "<td>{$row['nazwa']} </td>";
                echo "<td>{$row['cena']} </td>";
                echo "</tr>";
            }
            ?>
        </table>
    </section>

    <section id="secp">
        <h2>Zapisy na kursy</h2>
        <form action="index.php" method="post">
        <label>
            Imię <br>
            <input type="text" name="imie"> <br>
        </label>
        <label>
            Nazwisko <br>
            <input type="text" name="nazwisko"> <br>
        </label>
        <label>
            Wiek <br>
            <input type="number" name="wiek"> <br>
        </label>
        <label>
            Rodzaj kursu <br>
            <?php
            $query = "SELECT nazwa FROM kursy;";
            $result = mysqli_query($db, $query);

            echo "<select>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='{$row['nazwa']}'>{$row['nazwa']}</option>";
            }
            echo "</select>";
            ?> <br>
        </label>
        <button name="btn">Dodaj dane</button>
        </form>

        <?php
            if (isset($_POST["btn"])) {
                $imie = $_POST["imie"];
                $nazwisko = $_POST["nazwisko"];
                $wiek = $_POST["wiek"];
                if ($imie != "" && $nazwisko != "" && $wiek != "") {
                    $query = "INSERT INTO uczestnicy (imie, nazwisko, wiek) VALUES ('$imie', '$nazwisko', '$wiek')";
                    $result = mysqli_query($db, $query);
                    echo "Dane uczestnika $imie $nazwisko zostały dodane";
                } else {
                    echo "Wprowadź wszystkie dane";
                }

            }
        ?>

    </section>
</nav>

<footer>
    <p>Stronę wykonał: Jakub Pieniężny</p>
</footer>




</body>
</html>

<?php
mysqli_close($db);
?>