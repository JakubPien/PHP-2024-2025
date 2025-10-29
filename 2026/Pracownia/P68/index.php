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
    <h1>Zadanie P59 - ocena procent</h1>
    <h2>Autor: Jakub Pieniężny 3p</h2>
</header>


<section>

    <p>
        Napisz program, który określi położenie punktu o współrzędnych (x, y) względem prostokąta wyznaczonego przez proste X=A, X=B, Y=C, Y=D, gdzie A<B i C<D. Program powinien przyjmować dane z formularza (współrzędne punktu oraz parametry prostokąta), weryfikować, czy są to liczby oraz czy A<B i C<D, a następnie wyświetlać dane wejściowe i wynik analizy w czytelny sposób (np. czy punkt leży wewnątrz, na krawędzi czy na zewnątrz prostokąta).
        <h3>Wskazówki dla ucznia:</h3>
    Sprawdź, czy wszystkie dane wejściowe są liczbami za pomocą is_numeric().
    Zweryfikuj warunki A < B i C < D, aby prostokąt był poprawnie zdefiniowany.
    Punkt leży wewnątrz prostokąta, jeśli x jest między A i B (A < x < B) oraz y jest między C i D (C < y < D).
    Punkt leży na krawędzi, jeśli x=A lub x=B albo y=C lub y=D (przy zachowaniu pozostałych warunków).
    Zabezpiecz dane wejściowe za pomocą htmlspecialchars(), aby uniknąć problemów z XSS.
    </p>


    <form action="index.php" method="post">
        <fieldset >
            <label>
                X:
                <input type="number" name="x">
            </label>

            <label>
                Y:
                <input type="number" name="y">
            </label>
        </fieldset>
        <fieldset>

        </fieldset>
    </form>

</section>

<section>
    <?php

    ?>
</section>

</body>
</html>
