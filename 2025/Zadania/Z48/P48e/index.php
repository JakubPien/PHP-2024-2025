<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie P48e</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie P48e - tablica znaków i słowa</h1>
    <h2>Autor: Jakub Pieniężny 2p</h2>
</header>

<section>
    <pre>
        Napisz program w którym do jednowymiarowej tablicy znakowej wpisanych jest 10 znaków podanych przez użytkownika, a następnie:

pyta użytkownika o długość losowego słowa oraz ilość słów,
wyświetla wzorcową 10 znakową tablicę,
wyświetla podaną ilość słów składających się z podanej ilości znaków wygenerowanych ze znaków zapisanych w 10-elementowej tablicy stworzonej na początku programu.
    </pre>
     <form method="post">
         Podaj dokładnie 10 znaków:<br>
         <input type="text" name="znaki" maxlength="10" required><br><br>

        Długość słowa:<br>
         <input type="number" name="dlugosc" min="1" required><br><br>

        Ilość słów:<br>
         <input type="number" name="ilosc" min="1" required><br><br>

        <input type="submit" value="Generuj słowa">
    </form>
</section>


<section>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $znaki = $_POST["znaki"];
        $dlugosc = (int)$_POST["dlugosc"];
        $ilosc = (int)$_POST["ilosc"];

        if (strlen($znaki) != 10) {
            echo "<p>Podaj dokładnie 10 znaków!</p>";
        } elseif ($dlugosc <= 0 || $ilosc <= 0) {
            echo "<p>Długość słowa i ilość słów muszą być większe od zera.</p>";
        } else {
            $tablica = str_split($znaki);
            echo "<h2>Wzorcowa tablica znaków:</h2>";
            echo "<pre>";
            print_r($tablica);
            echo "</pre>";

            echo "<h2>Wygenerowane słowa:</h2>";
            for ($i = 0; $i < $ilosc; $i++) {
                $slowo = "";
                for ($j = 0; $j < $dlugosc; $j++) {
                    $index = rand(0, 9);
                    $slowo .= $znaki[$index];
                }
                echo $slowo . "<br>";
            }
        }
    }
    ?>
</section>

</body>
</html>
