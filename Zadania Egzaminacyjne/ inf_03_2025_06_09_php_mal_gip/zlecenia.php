<?php
$db = mysqli_connect("localhost", "root", "", "remonty");
?>

<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Remonty</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

<header>
    <h1>Malowanie i gipsowanie</h1>
</header>

<nav id="bg">

    <nav id="bb">
        <img src="tapeta_lewa.png" alt="usługi">
        <img src="tapeta_prawa.png" alt="usługi">
        <img src="tapeta_lewa.png" alt="usługi">
    </nav>

    <nav id="bn">
        <a href="kontakt.html" target="_blank">Kontakt</a>
        <a href="https://remonty.pl" target="_blank">Partnerzy</a>
    </nav>

    <section id="sl">
        <h2>Dla klientów</h2>

        <form action="zlecenia.php" method="post">
        <label for="ilosc">Ilu co najmniej pracowników potrzebujesz?</label> <br>
            <input type="number" id="ilosc" name="ilosc"> <button name="btn1">Szukaj Firm</button>
        </form>
        <?php
if (isset($_POST["btn1"])) {
    $ilosc = $_POST["ilosc"];
    if (empty($ilosc)) {
        echo "      ";
    } else {
    $query1 = "SELECT nazwa_firmy, liczba_pracownikow FROM wykonawcy WHERE liczba_pracownikow >= $ilosc";
    $result1 = mysqli_query($db, $query1);
    while ($row = mysqli_fetch_assoc($result1)) {
        echo "<p>{$row['nazwa_firmy']}, {$row['liczba_pracownikow']} pracowników</p>";
    }
    }

}
        ?>
    </section>

    <section id="ss">
        <h2>Dla wykonawców</h2>

        <form action="zlecenia.php" method="post">
        <label>
        <?php
    $query2 = "SELECT DISTINCT miasto FROM klienci ORDER BY miasto";
    $result = mysqli_query($db, $query2);

    echo "<select name='miasto'>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='{$row['miasto']}'>{$row['miasto']}</option>";
    }
    echo "</select>";

        ?>
            <br>

            <input type="radio" id="op1" value="malowanie" name="uslugi" checked>malowanie<label for="op1"></label> <br>
            <input type="radio" id="op2" value="gipsowanie" name="uslugi">gipsowanie<label for="op2"></label> <br>
            <button name="btn2">Szukaj klientów</button>
        </label>
        </form>

        <?php
if (isset($_POST["btn2"])) {
    $miasto = $_POST["miasto"];
    $uslugi = $_POST["uslugi"];
$query3 = "SELECT imie, cena FROM klienci JOIN zlecenia USING(id_klienta) WHERE miasto = '$miasto' AND rodzaj = '$uslugi'";
$result3 = mysqli_query($db, $query3);
echo "<ul>";
while ($row = mysqli_fetch_assoc($result3)) {
    echo "<li>{$row['imie']} - {$row['cena']}</li>";
}
    echo "</ul>";

}
        ?>

    </section>



</nav>
<footer>
    <p><b>Stronę wykonał: Jakub Pieniężny</b></p>
</footer>

</body>
</html>

<?php
mysqli_close($db);
?>