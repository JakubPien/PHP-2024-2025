<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../P533/style.css">
    <title>P534</title>
</head>
<body>
<section>
    <p>
        Plik napisy.txt zawiera 1000 liczb binarnych zapisanych w oddzielnych wierszach. Napisz skrypt, który odczyta te liczby i wypisze je na ekranie w następującej postaci:
        <br>
        Nr_liczby – liczba_binarna – liczba_dziesiętna
    </p>
</section>
<section>
    <?php

    function wypisz() {
        $zawartosc = file("napisy.txt");
        for ($i = 0; $i < sizeof($zawartosc); $i++) {
            $liczba_dec = bindec($zawartosc[$i]);
            echo ($i + 1) ." - ";
            echo $zawartosc[$i]. "  -  ";
            echo $liczba_dec. "";
            echo "<br>";
        }
    }

    wypisz();
    ?>
</section>

</body>
</html>


