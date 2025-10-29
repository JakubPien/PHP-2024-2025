<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>P59</title>
</head>
<body>

<header>
    <h1>Zadanie P66 - porównywanie dat</h1>
    <h2>Autor: Jakub Pieniężny 3p</h2>
</header>


<section>

    <pre>
        Napisz program, który dla dat o postaci dzien1, miesiac1, rok1 oraz dzien2, miesiac2, rok2 określi, która z nich jest wcześniejsza.
        Program powinien przyjmować dane z formularza, weryfikować ich poprawność (np. czy dzień i miesiąc tworzą istniejącą datę) i wyświetlać obie daty oraz wynik porównania w czytelny sposób.

        <h3>Wskazówki dla ucznia:</h3>

        Użyj funkcji checkdate(), aby zweryfikować, czy data jest poprawna (np. czy 31-02-2023 istnieje).
        Porównaj daty, zaczynając od roku, potem miesiąca, a na końcu dnia – możesz to zrobić za pomocą prostych porównań (<, >, ==).
        Alternatywnie, przekształć daty na znaczniki czasu za pomocą mktime() i porównaj je directly.
        Zabezpiecz dane wejściowe za pomocą htmlspecialchars(), aby uniknąć problemów z XSS.
        Wyświetl obie daty w formacie czytelnym, np. dzien-miesiac-rok, i poinformuj o błędach, jeśli dane są niepoprawne.

    </pre>


    <form action="index.php" method="post">
        <fieldset name="Pierwsza data:">
        <p>Dzień:</p><input type="number" name="dz1">
        <p>Miesiąc:</p><input type="number" name="mies1">
        <p>Rok:</p><input type="number" name="rok1">
        </fieldset>
        <fieldset Druga data>
            <p>Dzień:</p><input type="number" name="dz2">
            <p>Miesiąc:</p><input type="number" name="mies2">
            <p>Rok:</p><input type="number" name="rok2">
        </fieldset>
        <input type="submit" name="dzialaj" value="Wyślij">
    </form>

</section>

<section>
    <?php
    if(isset($_POST['dzialaj'])) {
            $dzien1 = htmlspecialchars($_POST["dz1"]);
            $miesiac1 = htmlspecialchars($_POST["mies1"]);
            $rok1 = htmlspecialchars($_POST["rok1"]);
            $dzien2 = htmlspecialchars($_POST["dz2"]);
            $miesiac2 = htmlspecialchars($_POST["mies2"]);
            $rok2 = htmlspecialchars($_POST["rok2"]);


            if (!checkdate($miesiac1, $dzien1, $rok1)) {
                echo "Pierwsza data ($dzien1-$miesiac1-$rok1) jest niepoprawna.<br>";
            } else if (!checkdate($miesiac2, $dzien2, $rok2)) {
                echo "Druga data ($dzien2-$miesiac2-$rok2) jest niepoprawna.<br>";
            } else {
                $czas1 = mktime(0, 0, 0, $miesiac1, $dzien1, $rok1);
                $czas2 = mktime(0, 0, 0, $miesiac2, $dzien2, $rok2);

                echo "Pierwsza data: $dzien1-$miesiac1-$rok1<br>";
                echo "Druga data: $dzien2-$miesiac2-$rok2<br>";

                if ($czas1 < $czas2) {
                    echo "Pierwsza data jest wcześniejsza od drugiej.";
                } else if ($czas1 > $czas2) {
                    echo "Druga data jest wcześniejsza od pierwszej.";
                } else {
                    echo "Obie daty są takie same.";
                }
            }
    }
    ?>
</section>

</body>
</html>
