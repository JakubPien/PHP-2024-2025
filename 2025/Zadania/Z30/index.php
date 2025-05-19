<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie Z30 - ułamek niewłaściwy</h1>
    <h2>Autor: Jakub Pieniężny 2p</h2>
</header>

<section>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="licznik">Podaj licznik:</label>
        <input type="number" id="licznik" name="licznik" required><br><br>

        <label for="mianownik">Podaj mianownik:</label>
        <input type="number" id="mianownik" name="mianownik" required><br><br>

        <input type="submit" value="Wyślij">
    </form>
</section>

<section>
    <p>Napisz program, który: ułamek niewłaściwy w postaci licznik/mianownik zamienia na właściwy np. licznik=4 mianowmik=3 odpowiedź 1 i 1/3. W wersji podstawowej funkcja nie musi skracać ułamka.</p>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {





        $licznik = $_POST["licznik"];
        $mianownik = $_POST["mianownik"];

        echo "Odpowiedź dla wartości: licznik = $licznik <br>";
        echo "mianownik = $mianownik <br>";
        if ($mianownik == 0) {
            return "Błąd: Mianownik nie może być równy zero.";
        }

        if ($licznik < $mianownik) {
            return "$licznik/$mianownik"; // Już jest ułamkiem właściwym
        }

        $liczba = (int)($licznik / $mianownik);
        $reszta = $licznik % $mianownik;

        echo"$liczba  <sup>$reszta</sup>/<sub>$mianownik</sub>";
    }
    ?>
</section>

</body>
</html>
