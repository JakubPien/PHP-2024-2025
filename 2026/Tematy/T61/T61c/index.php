<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie T61c</title>
</head>
<body>

<header>
    <h1>Zadanie T61c - pracownicy w kolorze.</h1>
    <h2>Autor: Jakub Pieniężny 3p.</h2>
</header>


<section>

    <p>
        Korzystając ze strony https://mockaroo.com/ wygeneruj w SQL następujące dane 50 pracowników:

        id
        first_name
        last_name
        email
        gender
        ip_address
        color
        Wartość color powinna być wyrażona w liczbie szesnastkowej.

        Utwórz bazę danych 3p_02_pracownicy_w_kolorze.
        Zaimportuj dane z wygenerowanego pliku.
        Napisz skrypt php, który wyświetli dane pracowników na tle koloru zapisanego w kolumnie color.
        Jako rozwiązanie prześlij: wygenerowany plik sql, eksport bazy danych oraz skrypt php realizujący zadanie.
    </p>


    <?php
    $db = mysqli_connect("localhost", "root", "", "3p_02_pracownicy_w_kolorze");

    $result = mysqli_query($db, "SELECT * FROM pracownicy ORDER BY id ASC");

    echo "<table border='1' cellpadding='10' style='border-collapse: collapse; margin-top: 20px;'>
        <tr style='background-color:#ddd;'>
            <th>ID</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>E-mail</th>
            <th>Płeć</th>
            <th>IP</th>
            <th>Color</th>
        </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        $color = $row["color"];
        echo "<tr>
            <td>{$row['id']}.</td>
            <td>{$row['first_name']}</td>
            <td>{$row['last_name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['gender']}</td>
            <td>{$row['ip_address']}</td>
            <td bgcolor='$color'>{$row['color']}</td>
            
          </tr>";
    }


    mysqli_close($db);
    ?>

</section>


</body>
</html>


