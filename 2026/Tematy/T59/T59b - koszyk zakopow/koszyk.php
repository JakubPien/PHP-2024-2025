<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Koszyk</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Koszyk:</h1>
</header>
<p><b>Zawartość koszyka</b></p>
<?php
$liczba = 0;

if (isset($_SESSION['koszyk'])) {
    foreach(unserialize($_SESSION['koszyk']) as $produkt) {
        echo "<li>" . $produkt . "</li>";
        $liczba++;
 }
} else {
    echo "brak sesji";
}
echo "W koszyku znajduję się: " . $liczba . " prodókty";
?>
<p><a href="lista.php">Przejdź do listy produktów</a></p>

</body>
</html>