<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z115</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie Z115 - konwersja typów</h1>
    <h2>Autor: Jakub Pieniężny 2p</h2>
</header>

<section>
    <pre>
       Napisz program, który sprawdza, czy podana wartość z formularza da się przekonwertować na liczbę, i określa, czy jest to liczba całkowita, rzeczywista czy wartość szesnastkowa. Program powinien obsługiwać przecinek jako separator dziesiętny oraz ujemne liczby szesnastkowe (np. -0xff). Wynik ma być wyświetlony w czytelny sposób, pokazując zarówno wprowadzoną wartość, jak i rezultat jej analizy.

Wskazówki dla ucznia:
Użyj funkcji is_numeric(), aby sprawdzić, czy wartość jest numeryczna.
Zamień przecinek na kropkę za pomocą str_replace(), ponieważ PHP rozpoznaje liczby zmiennoprzecinkowe z kropką (np. 0.34).
Do konwersji liczb szesnastkowych (np. 0xff lub -0xff) możesz użyć intval() z podstawą 16, ale zwróć uwagę na znak minusa.
Sprawdź typ liczby po konwersji za pomocą is_int() i is_float().
Zabezpiecz dane wejściowe używając htmlspecialchars(), aby uniknąć problemów z XSS.
podaj wartość:
    </pre>

     <form method="post">

         <label for="wartosc">Podaj wartość:</label>
         <input type="text" name="wartosc" id="wartosc" required>
         <input type="submit" value="Sprawdź">
    </form>
</section>


<section>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $wartosc_wejsciowa = htmlspecialchars($_POST["wartosc"]);
        $wartosc_przycieta = trim($wartosc_wejsciowa);

        echo "<p>Wprowadzona wartość: {$wartosc_przycieta}</p>";

        if (preg_match('/^-?0x[0-9a-fA-F]+$/', $wartosc_przycieta)) {
            $liczba = intval($wartosc_przycieta, 0);
            echo "<p>Rezultat: Liczba całkowita (szesnastkowa): {$liczba}</p>";
        } else {
            $wartosc_normalizowana = str_replace(',', '.', $wartosc_przycieta);

            if (is_numeric($wartosc_normalizowana)) {
                if (strpos($wartosc_normalizowana, '.') !== false) {
                    $value = floatval($wartosc_normalizowana);
                    echo "<p>Rezultat: Liczba rzeczywista: {$value}</p>";
                } else {
                    $value = intval($wartosc_normalizowana);
                    echo "<p>Rezultat: Liczba całkowita: {$value}</p>";
                }
            } else {
                echo "<p>Rezultat: To nie jest poprawna liczba.</p>";
            }
        }
    }
    ?>
</section>

</body>
</html>
