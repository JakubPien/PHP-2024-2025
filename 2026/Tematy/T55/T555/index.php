<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>T555</title>
</head>
<body>

<section>
<?php
function wyswietlDate() {
    $miesiace = array(
        1 => "stycznia",
        2 => "lutego",
        3 => "marca",
        4 => "kwietnia",
        5 => "maja",
        6 => "czerwca",
        7 => "lipca",
        8 => "sierpnia",
        9 => "września",
        10 => "października",
        11 => "listopada",
        12 => "grudnia"
    );

    $data = getdate();
    $dzien = $data['mday'];
    $miesiac = $data['mon'];
    $rok = $data['year'];

    echo "Dzisiaj jest: $dzien " . $miesiace[$miesiac] . " $rok";
}

wyswietlDate();
?>
</section>

</body>
</html>


