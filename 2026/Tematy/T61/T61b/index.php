<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>T61</title>
</head>
<body>

<header>
    <h1>Zadanie T61</h1>
    <h2>Autor: Jakub Pieniężny 3p</h2>
</header>

<section>
    <p>
        1. Utwórz bazę danych o nazwie 3p_2_pacjenci.

        2. W bazie danych utwórz tabelę tabela_1 zawierającą kolumny:

        identyfikator,
        imię,
        nazwisko,
        email.
        3. Utwórz plik tekstowy o nazwie dane.txt zawierający dane 3 pacjentów.

        4. Napisz skrypt php, który czyta dane z pliku i zapisuje je do tabeli tabela_1 i wyświetla je na stronie zadanie.php w postaci tabeli.

        Rozwiązanie powinno zawierać: eksport bazy, plik z danymi oraz skrypt php.
    </p>

    <?php
    $db = mysqli_connect("localhost", "root", "", "3p_2_pacjenci");
    if (!$db) {
        die("Błąd połączenia z bazą: " . mysqli_connect_error());
    }
    mysqli_set_charset($db, "utf8mb4");
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    mysqli_query($db, "CREATE TABLE IF NOT EXISTS tabela_1 (
        id INT PRIMARY KEY,
        imie VARCHAR(50),
        nazwisko VARCHAR(50),
        email VARCHAR(100)
    )");

    $plik = fopen("dane.txt", "r");
    if (!$plik) {
        die("Nie można otworzyć pliku dane.txt");
    }

    while (($data = fgetcsv($plik, 10, ";")) !== false) {
        if (count($data) < 4) continue;

        $id = $data[0];
        $imie = $data[1];
        $nazwisko = $data[2];
        $email = $data[3];

        $check = mysqli_query($db, "SELECT COUNT(*) AS ile FROM tabela_1 WHERE id = '$id'");
        $exists = mysqli_fetch_assoc($check);

        if ($exists['ile'] == 0) {
            $sql = "INSERT INTO tabela_1 (id, imie, nazwisko, email)
                    VALUES ('$id', '$imie', '$nazwisko', '$email')";
            mysqli_query($db, $sql);
        }
    }
    fclose($plik);

    $result = mysqli_query($db, "SELECT * FROM tabela_1 ORDER BY id ASC");

    echo "<table border='1' cellpadding='5' style='border-collapse: collapse; margin-top: 20px;'>
        <tr style='background-color:#ddd;'>
            <th>ID</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>E-mail</th>
        </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['imie']}</td>
            <td>{$row['nazwisko']}</td>
            <td>{$row['email']}</td>
          </tr>";
    }

    echo "</table>";

    mysqli_close($db);
    ?>
</section>

</body>
</html>
