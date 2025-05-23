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
        <fieldset>
            <legend>Podaj 10 znaków:</legend>
            <?php
            for ($i = 0; $i < 10; $i++) {
                echo 'Znak ' . ($i + 1) . ': <input type="text" name="znak[]" maxlength="1" required><br>';
            }
            ?>
        </fieldset>
        <br>
        Długość słowa: <input type="number" name="dlugosc" min="1" required><br><br>
        Ilość słów: <input type="number" name="ilosc" min="1" required><br><br>
        <input type="submit" value="Generuj słowa">
    </form>
</section>


<section>


    <?php
    $tablicaZnakow = $_POST["znak"];
        $dlugoscSlowa = (int)$_POST["dlugosc"];
        $iloscSlow = (int)$_POST["ilosc"];

        if (count($tablicaZnakow) == 10 && $dlugoscSlowa > 0 && $iloscSlow > 0) {
            echo "<h2>Wzorcowa tablica znaków:</h2>";
            echo implode(" ", $tablicaZnakow) . "<br><br>";

            echo "<h2>Wygenerowane słowa:</h2>";
            for ($i = 0; $i < $iloscSlow; $i++) {
                $slowo = "";
                for ($j = 0; $j < $dlugoscSlowa; $j++) {
                    $index = rand(0, 9);
                    $slowo .= $tablicaZnakow[$index];
                }        
                echo $slowo . "<br>";
            }
        } else {
            echo "<p style='color:red;'>Upewnij się, że podałeś 10 znaków oraz poprawne liczby.</p>";
        }
    ?>
</section>

</body>
</html>
