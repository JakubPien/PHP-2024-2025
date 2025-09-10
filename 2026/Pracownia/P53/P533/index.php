<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../P533/style.css">
    <title>P533</title>
</head>
<body>
<section>
    <p>
       W pliku imiona.txt zapisano 7 imion, każde imię w jednym wierszu (plik utwórz w edytorze tekstowym np. notatnik). Napisz skrypt, który odczyta imiona z pliku i wyświetli je na stronie w kolejności zapisania, oraz w kolejności odwrotnej.
    </p>
</section>
<section>
    <?php
    function zapisWK() {
        $zawartosc = file_get_contents("imiona.txt");
        echo nl2br($zawartosc);
    }

    function zapisWO() {
        $zawartosc = file("imiona.txt");
        $zawartosc = array_reverse($zawartosc);
        foreach ($zawartosc as $zawartosc) {
            echo $zawartosc. " <br>";
        }
    }

    echo "W kolejności zapisu. <br>";
    zapisWK();
    echo "<br> <br>";
    echo "W odwrotnej kolejności zapisu. <br>";
    zapisWO();


    ?>
</section>

</body>
</html>


