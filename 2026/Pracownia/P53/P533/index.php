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

    function wyswietlTekst() {
        if (file_exists("narodoweCzytanie.txt")) {
            $zawartosc =  file_get_contents("narodoweCzytanie.txt");
            echo nl2br($zawartosc);
        } else {
            echo "Nie znaleziono pliku";
        }
    } ;

    $plik = "narodoweCzytanie.txt";

    file_put_contents($plik, "W TYM ROKU NARODOWE CZYTANIE POD HONOROWYM PATRONATEM PARY PREZYDENCKIEJ ODBĘDZIE SIĘ 08.09.2018 R. W STULECIE ODZYSKANIA NIEPODLEGŁOŚCI WYBRANO POWIEŚĆ STEFANA ŻEROMSKIEGO „PRZEDWIOŚNIE”.
    WŁĄCZAJĄC SIĘ DO OGÓLNOPOLSKIEJ AKCJI, ZAPRASZAMY DO WSPÓLNEGO CZYTANIA W NASZEJ SZKOLE W PRZEDDZIEŃ TEGO WYDARZENIA 07.09.2018 R.
    NA DRUGIEJ GODZINIE LEKCYJNEJ W AULI SZKOLNEJ. CZYTAĆ BĘDĄ UCZNIOWIE KLASY 2M.
    FORMUŁA SPOTKANIA NIE JEST ZAMKNIĘTA – KAŻDY MOŻE PRZYŁĄCZYĆ SIĘ DO CZYTANIA LUB SŁUCHANIA.");

    wyswietlTekst();
    ?>
</section>

</body>
</html>


