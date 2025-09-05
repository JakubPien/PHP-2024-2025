<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>T551</title>
</head>
<body>

<section>
<?php
function sumaDwochNajmniejszych($numbers) {
    // Sprawdzamy, czy tablica zawiera co najmniej dwie liczby
    if (count($numbers) < 2) {
        return "Tablica musi zawierać przynajmniej dwie liczby.";
    }

    // Sortujemy tablicę rosnąco
    sort($numbers);

    // Zwracamy sumę dwóch pierwszych liczb w posortowanej tablicy
    return $numbers[0] + $numbers[1];
}

// Przykładowe dane
$numbers = [2,5,3,2,1,5,67,3];


echo "Suma dwóch najmniejszych liczb w toblicy = ";
echo sumaDwochNajmniejszych($numbers);
?>
</section>

</body>
</html>


