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
    <h1>Zadanie P74 - Ułamnki i piętra</h1>
    <h2>Autor: Jakub Pieniężny 3p</h2>
</header>


<section>

    <p>
        Napisz program, który dla danej liczby całkowitej N wyświetla ciąg liczb w postaci ułamka zwykłego i dziesiętnego, prezentując wynik w specyficzny sposób. Na przykład dla N=3 program powinien wyświetlić:
        Piętro 1 > 1/1 - 1.000000
        Piętro 2 > > 1/2 - 0.500000
        Piętro 3 > > > 1/3 - 0.333333
        > > > > Koniec wspinaczki wracamy < < < <
        Piętro 3 > > >
        Piętro 2 > >
        Piętro 1 >
        Program powinien przyjmować N z formularza i weryfikować, czy jest to liczba całkowita dodatnia.

        Wskazówki dla ucznia:
        Sprawdź, czy N jest liczbą całkowitą dodatnią za pomocą is_numeric() i warunku N > 0.
        Użyj pętli for, aby wygenerować ułamki od 1/1 do 1/N.
        Oblicz ułamek dziesiętny za pomocą dzielenia (np. 1 / $i) i sformatuj go funkcją sprintf() do 6 miejsc po przecinku.
        Dodawaj znaki > zależnie od numeru piętra (np. w pętli zwiększaj ich liczbę), a potem odwracaj kolejność dla powrotu.
        Zabezpiecz dane wejściowe za pomocą htmlspecialchars(), aby uniknąć problemów z XSS.
    </p>


    <form action="index.php" method="post">
        <fieldset> Podaj liczbę pięter
            <label>
                N:
                <input type="text" name="n">
                <input type="submit" value="Wyślij">
            </label>

    </form>

</section>

<section>
   <?php
if (isset($_POST['n'])) {
    $n = htmlspecialchars($_POST['n']);
    $znak = '';
    $znak2 = '';

    if (is_numeric($n) && $n > 0) {
        for ($i = 1; $i <= $n; $i++) {
            $znak .= " >";
            $znak2 .= " <";
            $ulamek = 1 / $i;
            $ulamek = sprintf("%.6f", $ulamek);
            echo "Piętro $i$znak  1/$i - $ulamek<br>";
        }

        echo "$znak > Koniec wspinaczki wracamy$znak2<br>";

        for ($i = $n; $i > 0; $i--) {
            $znak_w_dol = str_repeat(" >", $i);
            echo "Piętro $i$znak_w_dol<br>";
        }

    } else if ($n < 0) {
        echo "Podaj dodatnią liczbę całkowitą.";
    } else {
        echo "Podaj liczbę.";
    }
}
?>

</section>

</body>
</html>
