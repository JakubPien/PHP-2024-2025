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

    <form method="post">
        <input type="submit" name="stworz" id="stworz" value="Stwórz tabelę">
        <input type="submit" name="zaladuj" id="zaladuj" value="Załaduj tabelę">
        <input type="submit" name="wyswietl" id="wyswietl" value="Wyświetl zawartość">
        <input type="submit" name="usun" id="usun" value="Usuń tabelę"
    </form>

    <?php
    $db = mysqli_connect("localhost", "root", "", "3p_2_baza_pracownikow");
    if (!$db) die("Błąd połączenia: " . mysqli_connect_error());

    mysqli_set_charset($db, "utf8mb4");

    header("Content-Type: text/html; charset=utf-8");

    if (isset($_POST['stworz'])) {
        $create = "CREATE TABLE IF NOT EXISTS pracownicy (
        id INT PRIMARY KEY,
        nazwisko VARCHAR(50),
        imie VARCHAR(50),
        stanowisko VARCHAR(50),
        dzial VARCHAR(50),
        sekcja VARCHAR(50)
    )";

        if (mysqli_query($db, $create)) echo "Tabela została stworzona.<br>";
        else echo "Błąd: " . mysqli_error($db);
    }

    if (isset($_POST['zaladuj'])) {
        mysqli_query($db, "TRUNCATE TABLE pracownicy");

        $plik = fopen("pracownicy.csv", "r");
        if (!$plik) {
            die("Nie można otworzyć pliku dane.csv");
        }

        $header = fgetcsv($plik, 1000, ";");

        while (($data = fgetcsv($plik, 1000, ";")) !== false) {
            $id = $data[0];
            $nazwisko = $data[1];
            $imie = $data[2];
            $stanowisko = $data[3];
            $dzial = $data[4];
            $sekcja = $data[5];

            $sql = "INSERT INTO pracownicy (id, nazwisko, imie, stanowisko, dzial, sekcja)
                VALUES ('$id','$nazwisko','$imie','$stanowisko','$dzial','$sekcja')
                ON DUPLICATE KEY UPDATE
                    nazwisko='$nazwisko',
                    imie='$imie',
                    stanowisko='$stanowisko',
                    dzial='$dzial',
                    sekcja='$sekcja'";

            if (!mysqli_query($db, $sql)) {
                echo "Błąd wstawiania ID=$id: " . mysqli_error($db) . "<br>";
            }
        }

        fclose($plik);
        echo "Dane z CSV zostały wczytane.<br>";
    }

    if (isset($_POST['wyswietl'])) {
        $result = mysqli_query($db, "SELECT * FROM pracownicy");

        echo "<table border='1' cellpadding='5'>
            <tr>
                <th>ID</th><th>Nazwisko</th><th>Imię</th><th>Stanowisko</th><th>Dział</th><th>Sekcja</th>
            </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nazwisko']}</td>
                <td>{$row['imie']}</td>
                <td>{$row['stanowisko']}</td>
                <td>{$row['dzial']}</td>
                <td>{$row['sekcja']}</td>
              </tr>";
        }

        echo "</table>";
    }

    mysqli_close($db);

    ?>
</section>

</body>
</html>