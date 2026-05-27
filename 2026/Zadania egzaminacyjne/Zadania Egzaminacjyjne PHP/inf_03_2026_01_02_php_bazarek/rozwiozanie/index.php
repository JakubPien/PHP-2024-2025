<?php
    $db = mysqli_connect("localhost", "root", "", "bazar")
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
    ///skrypt 1
        $query = "SELECT nazwa, plik FROM towar LIMIT 10";
        $result = mysqli_query($db, $query);
        while($row = mysqli_fetch_row($result)) {
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
            <select name="owoce" id="owoce"></select>
            <?php
                ///skrypt 2
                $query = "SELECT id, nazwa FROM towar";
                $result = mysqli_query($db, $query);
                while($row = mysqli_fetch_row($result)) {
                    echo "<option name='owoce' value='{$row['id']}'>{$row['nazwa']}</option>";
                }
            ?>
            <input type="number">
            <button>Zamów</button>
        </form>

        <?php
            ///skrypt 3
            if ()
        ?>

    </section>
</main>

<footer>
    Stronę opracował: Jakub Pieniężny 3p
</footer>

</body>
</html>


