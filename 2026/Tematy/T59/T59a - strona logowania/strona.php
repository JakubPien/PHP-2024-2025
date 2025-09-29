<?php
session_start();
if (!isset($_SESSION['log'])) {
    header('location: loguj.php');
    exit;
}
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Strona główna</title>
    <meta charset="UTF-8">
</head>
<body>
<section>
<?php
$imie = ucfirst($_SESSION['log']);
echo "Witaj " . $imie;
?>
<p>Jesteś na stronie głównej.</p>
<p>Przed opuszczeniem strony wyloguj się!</p>
<a href="wyloguj.php">Wyloguj</a>
</section>
</body>
</html>
