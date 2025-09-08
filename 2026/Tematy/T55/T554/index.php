<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>T554</title>
</head>
<body>

<section>
<?php

function sprawdzDate( $mm,  $dd,  $yy) {
    if (!checkdate($mm, $dd, $yy)) {
        echo "Błędna data";
        return;
    }

    $data = new DateTime("$yy-$mm-$dd");
    $dzis = new DateTime();

    if ($data < $dzis) {
        echo "historia";
    } else {
        echo "teraźniejszość lub przyszłość";
    }
}


sprawdzDate(2,12,2025);

?>
</section>

</body>
</html>


