<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>T552</title>
</head>
<body>

<section>
<?php

function iloscImionZenskich($imiona) {
    $ilosc = 0;
    for ($i = 0; $i < count($imiona); $i++) {
        $imie =  $imiona[$i];
        $imie = strtolower($imie);
        if (substr($imie, -1) == 'a' && $imie !== 'kuba' && $imie !== 'barnaba') {
            $ilosc++;
        }
    }
    return $ilosc;
}

    $imiona = ["Ania", "BarBara", "JuLKA", "Bartek", "kuBA"];
for ($i = 0; $i < count($imiona); $i++) {
    echo $imiona[$i]. " ";
}
echo "<br>";
echo "Ilość imion żeńskich: " . iloscImionZenskich($imiona);
?>
</section>

</body>
</html>


