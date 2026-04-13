<?php
    $db = mysqli_connect("localhost", "root", "", "biblioteka");
?>

<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteka miejska</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

<header>
    <?php
    // Skrypt 1
    for ($i = 0; $i < 20; $i++) {
        echo "<img src='obraz.png' alt=''>";
    }
    ?>
</header>

<section id="sec1">
    <h2>Liryka</h2>
    <form action="biblioteka.php" method="post">
        <?php
        $query = "SELECT id, tytul FROM ksiazka WHERE gatunek = 'liryka'";
        $result = mysqli_query($db, $query);

        echo "<select name='ksiazka1'>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='{$row['id']}'>{$row['tytul']}</option>";
        }
        echo "</select>";
        ?>
        <button name="btn1">Rezerwuj</button>
    </form>
    <?php
    if (isset($_POST["btn1"])) {
        $id = $_POST["ksiazka1"];

        $query = "UPDATE ksiazka SET rezerwacja = 1 WHERE id = $id;";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<p>Książka {$row['tytul']} została zarezerwowana</p>";
        }

    }
    ?>
</section>

<section id="sec2">
    <h2>Epika</h2>
    <form action="biblioteka.php" method="post">
    <?php
    $query = "SELECT id, tytul FROM ksiazka WHERE gatunek = 'epika'";
    $result = mysqli_query($db, $query);

    echo "<select name='ksiazka2'>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='{$row['id']}'>{$row['tytul']}</option>";
    }
    echo "</select>";
    ?>
    <button name="btn2">Rezerwuj</button>
    </form>
    <?php
    if (isset($_POST["btn2"])) {
        $id = $_POST["ksiazka2"];

        $query = "UPDATE ksiazka SET rezerwacja = 1 WHERE id = $id;";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<p>Książka {$row['tytul']} została zarezerwowana</p>";
        }

    }
    ?>
</section>

<section id="sec3">
    <h2>Dramat</h2>
    <form action="biblioteka.php" method="post">
    <?php
    $query = "SELECT id, tytul FROM ksiazka WHERE gatunek = 'dramat'";
    $result = mysqli_query($db, $query);

    echo "<select name='ksiazka3'>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='{$row['id']}'>{$row['tytul']}</option>";
    }
    echo "</select>";
    ?>
    <button name="btn3">Rezerwuj</button>
    </form>
    <?php
    if (isset($_POST["btn3"])) {
        $id = $_POST["ksiazka3"];

        $query = "UPDATE ksiazka SET rezerwacja = 1 WHERE id = $id;";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<p>Książka {$row['tytul']} została zarezerwowana</p>";
        }

    }
    ?>
</section>

<section id="sec4">
    <h2>Zaległe książki</h2>
    <?php
    $query = "SELECT tytul, id_cz, data_odd FROM ksiazka JOIN wypozyczenia ON id_ks = id ORDER BY data_odd ASC LIMIT 15";
    $result = mysqli_query($db, $query);

    echo "<ul>";
    while ($row = mysqli_fetch_assoc($result)) {
         echo "<li>{$row['tytul']} {$row['id_cz']} {$row['data_odd']}</li>";
    }
    echo "</ul>";

    ?>
</section>

<footer>
    <p><b>Autor: Jakub Pieniężny 3p</b></p>
</footer>

</body>
</html>

<?php
    mysqli_close($db);
?>