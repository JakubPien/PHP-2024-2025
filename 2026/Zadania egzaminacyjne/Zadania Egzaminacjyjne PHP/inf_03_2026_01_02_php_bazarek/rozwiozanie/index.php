<?php
    $db = mysqli_connect("localhost", "root", "", "bazar");
?>

<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zdrowy bazarek</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

<header>
    <h1>Zdrowy bazarek</h1>
</header>

<nav>
    <?php
        $query = "SELECT nazwa, plik FROM towar LIMIT 10";
        $result = mysqli_query($db, $query);
        while($row = mysqli_fetch_assoc($result)) {
            echo "<img src='{$row['plik']}' alt='{$row['nazwa']}'>";
        }
    ?>
</nav>

<main>
    <aside>
        <img src="market.png" alt="bazarek">
    </aside>

    <section>
        <p>Wybierz owoc lub warzywo i podaj jego wagę:</p>

        <form action="index.php" method="post">
            <select name="owoce" id="owoce">
            <?php
                $query = "SELECT id, nazwa FROM towar";
                $result = mysqli_query($db, $query);
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='{$row['id']}'>{$row['nazwa']}</option>";
                }
            ?>
            </select>
            <input type="number" name="kilogramy">
            <button>Zamów</button>
        </form>

        <?php
            if (isset($_POST['owoce']) && isset($_POST['kilogramy'])) {
                $idTowaru = $_POST['owoce'];
                $kilogramy = $_POST['kilogramy'];

                $query = "SELECT rodzaj, nazwa, cena FROM towar WHERE id = $idTowaru";
                $result = mysqli_query($db, $query);
                $row = mysqli_fetch_assoc($result);

                $wartosc = $row['cena'] * $kilogramy;
                echo "<p>{$row['rodzaj']} {$row['nazwa']} wartość: $wartosc zł</p>";

                $query = "INSERT INTO zamowienie (id_towar, id_sklep, liczba_kg) VALUES ($idTowaru, 2, $kilogramy)";
                mysqli_query($db, $query);
            }
        ?>

    </section>
</main>

<footer>
    Stronę opracował: Jakub Pieniężny 3p
</footer>

</body>
</html>

<?php
mysqli_close($db);
?>
