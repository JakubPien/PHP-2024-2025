<?php
session_start();

if (isset($_SESSION['log'])) {
    header('Location: strona.php');
    exit();
}

if (isset($_POST['nazwa'], $_POST['haslo'])) {
    $nazwa = $_POST['nazwa'];
    $haslo = $_POST['haslo'];

    if ($nazwa === 'jakub' && $haslo === 'jakub113') {
        $_SESSION['log'] = $nazwa;
        header('Location: strona.php');
        exit();
    } else {
        $blad = "Nieprawidłowe dane logowania";
    }
}
?>


<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie T59a</title>
</head>
<body>

<header>
    <h1>Zadanie T59a - strona logowania</h1>
    <h2>Autor: Jakub Pieniężny 3p</h2>
</header>

<section>
    <p>
        PHP - strona logowania


        Przyjmij, że do strony internetowej mają dostęp tylko zalogowani użytkownicy. Wykorzystaj mechanizm sesji do przeprowadzenia autoryzacji użytkownika.
        (prawidłowe dane: nazwa(jakub) hasło(jakub113)
    </p>
</section>

<section>
<div>
    <form action="loguj.php" method="post">
        <p id="log">Logowanie</p>
        <p class="fo">Nazwa użytkownika:</p>
        <input type="text" name="nazwa" value="" size="25">
        <p class="fo">Hasło:</p>
        <input type="password" name="haslo" value="" size="25">
        <input type="submit" value="Zaloguj się">
    </form>
</div>
</section>
</body>
</html>
