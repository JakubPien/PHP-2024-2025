<?php
    $db = mysqli_connect("localhost", "root", "", "dane");
?>

<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filmoteka</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>

<section id="b1">
    <img src="klaps.png" alt="Nasze filmy">
</section>

<section id="b2">
    <h1>BAZA FILMÓW</h1>
</section>

<section id="b3">
    <form action="index.php" method="post">
        <label>
            <select name="filmy">
                <option value="Sci-Fi">Sci-Fi</option>
                <option value="animacja">animacja</option>
                <option value="dramat">dramat</option>
                <option value="horror">horror</option>
                <option value="komedia">komedia</option>
            </select>
        </label>
        <input type="submit" name="btn" value="Filmy">
    </form>
</section>

<section id="b4">
    <img src="gwiezdneWojny.jpg" alt="szturmowcy">
</section>

<section id="lewy">
    <h2>Wybrano filmy:</h2>
    <?php
    if (isset($_POST['btn'])) {
        $filmy = $_POST['filmy'];

        $query = "SELECT tytul, rok, ocena FROM filmy JOIN gatunki ON gatunki_id = gatunki.id WHERE nazwa = '$filmy'";
        $result = mysqli_query($db, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<p>Tytuł: {$row['tytul']}, Rok produkcji: {$row['rok']}, Ocena: {$row['ocena']}";
        }
    }
    ?>
</section>

<section id="prawy">
    <h2>Wszystkie filmy</h2>
    <?php
    $query = "SELECT filmy.id, tytul, imie, nazwisko FROM filmy JOIN rezyserzy ON filmy.rezyserzy_id = rezyserzy.id";
    $result = mysqli_query($db, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p>{$row['id']}. {$row['tytul']}, reżyseria: {$row['imie']} {$row['nazwisko']}</p>";
    }

    ?>
</section>

<footer>
        <p>Autor: Jakub Pieniężny 3p</p>
    <a href="kwerendy">Zapytania do bazy</a>
    <a href="https://www.filmy.pl" target="_blank">Przejdź do filmy.pl</a>
</footer>


</body>
</html>

<?php
    mysqli_close($db);
?>