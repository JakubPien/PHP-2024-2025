<?php
$cookie_name = "user_data";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $surname = htmlspecialchars($_POST["surname"]);
    $birthdate = $_POST["birthdate"];

    $user_data = json_encode([
            "name" => $name,
        "surname" => $surname,
        "birthdate" => $birthdate
    ]);
    setcookie($cookie_name, $user_data, time() + (86400 * 30), "/");

    echo "Dane zapisane w ciasteczku!<br>";
}

if (isset($_COOKIE[$cookie_name])) {
    $data = json_decode($_COOKIE[$cookie_name], true);
    $name = $data["name"];
    $surname = $data["surname"];
    $birthdate = $data["birthdate"];

    echo "Witaj ponownie, ". $name ." ". $surname ."!<br>";

    $today = new DateTime();
    try {
        $next_birthday = new DateTime(date("Y") . "-" . date("m-d", strtotime($birthdate)));
    } catch (Exception $e) {

    }

    if ($next_birthday < $today) {
        $next_birthday->modify('+1 year');
    }

    $interval = $today->diff($next_birthday);
    echo "Twoje urodziny będą za " . $interval->days . " dni!<br>";
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Zadanie T59</title>
</head>
<body>

<header>
    <h1>Zadanie T59b</h1>
    <h2>Autor: Jakub Pieniężny 3P</h2>
</header>

<section>
    <p>
        PHP Przesyłanie danych użytkownika

        (Podstawowa wersja rozwiązania)
        Utwórz skrypt, który dane użytkownika przesyłane za pomocą formularza będzie przekazywał do utworzonego pliku cookie. Formularz powinien zawierać imię i nazwisko użytkownika.

        (Wersja rozszerzona)

        Dodatkowo przekazana jest również data urodzin użytkownika. Skrypt powinien wyświetlać informację, za ile dni użytkownik będzie obchodził urodziny.

        CSS i inne szykany nie są obowiązkowe ;)
    </p>
</section>

<section>
    <form method="post" action="">
        Imię: <input type="text" name="name" required>
        Nazwisko: <input type="text" name="surname" required>
        Data urodzin: <input type="date" name="birthdate"> <br>
        <input type="submit" value="Zapisz">
    </form>
</section>

</body>
</html>
