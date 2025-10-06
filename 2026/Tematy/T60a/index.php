<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>T60a</title>
</head>
<body>

<header>
    <h1>Zadanie T60a</h1>
    <h2>Autor: Jakub Pieniężny 3p</h2>
</header>

<section>
    <p>
        Utwórz bazę danych o nazwie 3p_2_baza_pracownikow.
        Do zadania dołączony został plik zawierający dane 114 pracowników - dokonaj konwersji tych danych do formaty txt (uzyskaj plik z danymi pracownicy.txt.
        Na utworzonej stronie projektu znajduje się przycisk "Utwórz tabelę", który w bazie 3p_2_baza_pracownikow tworzy tabelę pracownicy.
        Drugi przycisk "Załaduj dane" dodaje dane z pliku tekstowego pracownicy.txt do tabeli pracownicy.
        Trzeci przycisk wyświetla dane z tabeli pracownicy w postaci tabelarycznej.
    </p>

    <input type="submit" id="stworz" value="Stwórz tabelę">
    <input type="submit" id="zaladuj" value="Załaduj tabelę">
    <input type="submit" id="wyswietl" value="Wyświetl zawartość">
</section>

<section>

<?php
if (isset($_POST['stworz'])) {
    $db = mysqli_connect("localhost", "root", "", "3p_2_baza_pracownikow");

    $create = "CREATE TABLE IF NOT EXISTS pracownicy";

    $wynik = mysqli_query($db, $create);

//CREATE TABLE IF NOT EXISTS pracownicy ( id INT PRIMARY KEY, nazwisko VARCHAR(50), imie VARCHAR(50), stanowisko VARCHAR(50), dzial VARCHAR(50), sekcja VARCHAR(20) )
}
?>

<?php
if (isset($_POST['zaladuj'])) {
    $db = mysqli_connect("localhost", "root", "", "3p_2_baza_pracownikow");

    $zal = "INSERT INTO pracownicy VALUES ";

    $wynik = mysqli_query($db, $zal);
}
?>

<?php
if (isset($_POST['wyswietl'])) {
    $db = mysqli_connect("localhost", "root", "", "3p_2_baza_pracownikow");
    $wys = "SELECT * FROM pracownicy";

    $wynik = mysqli_query($db, $wys);
    echo "<tr>   <td>ID</td> <td>Nazwisko</td> <td>Imię</td><td>Stanowisko</td> <td>Dział</td> <td>Sekcja</td>    </tr>";
    while ($el = mysqli_fetch_row($wynik)) {
        echo "<tr>" . "<td>" . $el[0] . "</td><td>" . $el[1] . "</td><td>" . $el[2] . "</td><td>" . $el[3] . "</td><td>" . $el[4] . "</td><td>" . $el[5] . "</td></tr>";
    }
}
?>

</section>

</body>
</html>