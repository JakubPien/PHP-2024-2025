<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Z78</title>
</head>
<body>

<header>
    <h1>Zadanie Z78 - litery</h1>
    <h2>Autor: Jakub Pieniężny 3p</h2>
</header>


<section>

    <pre>
      Napisz program, który odczytuje dwie wartości będące dużymi literami alfabetu angielskiego i wypisuje litery od pierwszej do drugiej.
    </pre>


    <form action="index.php" method="post">
            <label>
                Podaj pierwszy znak (A-Z): <br>
                <input type="text" name="zn1"> <br>
                Podaj drugi znak (A-Z): <br>
                <input type="text" name="zn2"><br>
                <input type="submit" name="przycisk" value="Wyślij">
            </label>
    </form>

</section>

<section>
    <?php
    if (isset($_POST['przycisk'])) {
        $zn1 = htmlspecialchars($_POST['zn1']);
        $zn2 = htmlspecialchars($_POST['zn2']);

        echo "Pierwszy znak: $zn1 <br>";
        echo "Drugi znak: $zn2 <br><br>";

        if ($zn1 < $zn2) {
        for (; $zn1 < $zn2; $zn1++) {
                echo "$zn1,";
        } echo "$zn2";
        }
    }
    ?>
</section>

</body>
</html>
