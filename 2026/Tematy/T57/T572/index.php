<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>T572</title>
</head>
<body>

<header>
    <h3>Zadanie T572</h3>
    <h2>Autor: Jakub Pieniężny</h2>
</header>

<section>
    <pre>
        Zdefiniuj klasę czołg. Czołg powinien mieć następujące właściwości:

nazwa,
kolor,
ilość amunicji
oraz metody:

info() – wyświetlająca informację o czołgu,
pomaluj() – zmieniająca kolor czołgu,
załaduj() – zwiększająca ilość amunicji,
strzelaj() – wyświetla komunikat i zmniejsza ilość amunicji o 1 (w wariancie rozwiniętym należy uniemożliwić wykonanie strzału jeśli nie ma amunicji).
Utwórz obiekt klasy czołg i przetestuj działanie metod.
    </pre>


    <div>
<?php

    class Czolg {
        public $nazwa;
        public $kolor;
        public $il_amm;

        public function __construct($nazwa, $kolor, $il_amm) {
            $this->nazwa = $nazwa;
            $this->kolor = $kolor;
            $this->il_amm = $il_amm;
        }

        function info() {
            echo "Na ten czołg mówią $this->nazwa.<br>"
            . "Jest w kolorze: $this->kolor <br>"
            . "Posiada jeszczę $this->il_amm sztuk amunicji.<br>";
        }
        function przemaluj($kolor) {
            $this->kolor = $kolor;
        }
        function zaladuj() {
            $this->il_amm += 1;
            echo "Udało się załadować dodatkową amunicję jest teraz dostępnych: $this->il_amm sztuk amunicji.<br>";
        }

        function strzel() {
            if ($this->il_amm == 0) {
                echo "<hr>Nie można wystrzelić KAPITANIE musimy załadować amunicję <br> <hr>";
            } else {
                $this->il_amm -= 1;
                echo "<hr>BUUUUMM. <br>Kapitanie cel trafiony <br>Zostało jeszcze: $this->il_amm sztuk<hr>";
            }
        }

    }

    $rudy = new Czolg("Rudy 102", "Zielone Moro", "1");

    $rudy->info();
    $rudy->przemaluj("Granatowy");
    $rudy->strzel();
    $rudy->strzel();
    $rudy->zaladuj();
    $rudy->info();

?>
    </div>
</section>


</body>
</html>


