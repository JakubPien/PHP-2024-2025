<?php
session_start();

if (isset($_SESSION['log'])) {
    header('Location: index.php');
    exit();
}

if (isset($_POST['nazwa'], $_POST['haslo'])) {
    $nazwa = $_POST['nazwa'];
    $haslo = $_POST['haslo'];

    if ($nazwa === 'jakub' && $haslo === 'jakub113') {
        $_SESSION['log'] = $nazwa;
        header('Location: index.php');
        exit();
    } else {
        $blad = "Nieprawidłowe dane logowania";
    }
}
?>

<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Wiataj na loguj</p>


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
</body>
</html>

