<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>T50</title>
</head>
<body>

<section>
<?php
$imie = htmlspecialchars($_POST["imie"]);

if (is_numeric($_POST["liczba1"])) {
    $liczba1 = (float)$_POST["liczba1"];
} else {
    $liczba1 = null; // Ignorujemy błędne wartości
}
if (is_numeric($_POST["liczba2"])) {
    $liczba2 = (float)$_POST["liczba2"];
} else {
    $liczba2 = null; // Ignorujemy błędne wartości
}
if (is_numeric($_POST["liczba3"])) {
    $liczba3 = (float)$_POST["liczba3"];
} else {
    $liczba3 = null; // Ignorujemy błędne wartości
}
if (is_numeric($_POST["liczba4"])) {
    $liczba4 = (float)$_POST["liczba4"];
} else {
    $liczba4 = null; // Ignorujemy błędne wartości
}
$name = $_POST["imie"];

$suma = 0; $ilosc = 0;
if ($liczba1 != null) {$suma += $liczba1; $ilosc++;}
if ($liczba2 != null) {$suma += $liczba2; $ilosc++;}
if ($liczba3 != null) {$suma += $liczba3; $ilosc++;}
if ($liczba4 != null) {$suma += $liczba4; $ilosc++;}

$srednia = $ilosc > 0 ? $suma / $ilosc : 0;


echo "<h2>Witaj <b>$imie</b> na mojej stronie </h2>";
echo "<p>Suma liczb: $suma</p>";
echo "<p>Średnia liczb: $srednia</p>";
?>
</section>

</body>
</html>


