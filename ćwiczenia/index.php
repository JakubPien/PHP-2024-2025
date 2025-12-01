<?php
session_start();
if (!isset($_SESSION['log'])) {
    header('location: loguj.php');
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<section>
    <form action="index.php" method="post">
        <input type="number" name="x">
        <input type="number" name="y">
        <input type="submit" name="send" value="Wyślij">
        <input type="number" name="z">
        <input type="submit" name="send2" value="Wyślij">
        <input type="submit" name="send3" value="Wyślij">
        <input type="text">
    </form>

</section>

<?php
if(isset($_POST["send"])){
    $x = $_POST["x"];
    $y = $_POST["y"];

    if ($y != 0) {
        echo "Suma: " . $x + $y . "<br>";
        echo "Różnica: " . $x - $y . "<br>";
        echo "Mnożenie: " . $x * $y . "<br>";
        echo "Dzielenie: " . $x / $y . "<br>";
    } else {
        echo "Druga liczba jest równa 0";
    }
}

if(isset($_POST["send2"])){
    $z = $_POST["z"];

    if ($z < 0) {
        echo "Liczba jest ujemna.<br>";
    } elseif ($z == 0) {
        echo "Liczba jest zerem.<br>";
    } elseif ($z > 0) {
        echo "Liczba jest dodatnia.<br>";
    }

    if ($z % 2 == 0) {
        echo "Liczba jest parzysta.";
    } else {
        echo "Liczba jest nieparzysta.";
    }
}

if(isset($_POST["send3"])){
    for ($i = 0; $i <= 100; $i++){
        if ($i % 3 == 0 && $i % 5 == 0){
            echo "$i. ";
        }
    }
}

?>
</body>
</html>


