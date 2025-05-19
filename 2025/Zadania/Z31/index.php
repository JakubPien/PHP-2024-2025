<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Obliczanie pola trójkąta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Zadanie Z31 Pole trójkąta</h1>
    <h2>Autor: Jakub Pieniężny 2p</h2>
</header>

<section>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="x1">Podaj x₁:</label>
    <input type="number" id="x1" name="x1" required><br><br>

    <label for="y1">Podaj y₁:</label>
    <input type="number" id="y1" name="y1" required><br><br>

    <label for="x2">Podaj x₂:</label>
    <input type="number" id="x2" name="x2" required><br><br>

    <label for="y2">Podaj y₂:</label>
    <input type="number" id="y2" name="y2" required><br><br>

    <label for="x3">Podaj x₃:</label>
    <input type="number" id="x3" name="x3" required><br><br>

    <label for="y3">Podaj y₃:</label>
    <input type="number" id="y3" name="y3" required><br><br>

    <input type="submit" value="Wyślij">
</form>
</section>
<section>
    <p>Napisz program, który: dla współrzędnych wierzchołka trójkąta (x1,y1), (x2,y2),(x3,y3), oblicza jego pole powierzchni</p>
    <img src="img.png" alt="">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $x1 = $_POST["x1"];
    $y1 = $_POST["y1"];
    $x2 = $_POST["x2"];
    $y2 = $_POST["y2"];
    $x3 = $_POST["x3"];
    $y3 = $_POST["y3"];

    if (!is_numeric($x1) || !is_numeric($y1) || !is_numeric($x2) || !is_numeric($y2) || !is_numeric($x3) || !is_numeric($y3)) {
        echo "<p style='color:red;'>Błędne dane wejściowe. Współrzędne muszą być liczbami.</p>";
    } else {
        $pole = 0.5 * abs(($x1 * ($y2 - $y3) + $x2 * ($y3 - $y1) + $x3 * ($y1 - $y2)));

        echo ("<br>PolePole trójkąta ABC o wierzchołkach:<br>");
        echo ("A($x1,$y1)<br>");
        echo ("B($x2,$y2)<br>");
        echo ("C($x3,$y3)<br>");
        echo ("Wynosi: $pole");
}
}
?>
</section>

</body>
</html>
