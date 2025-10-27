<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>P60</title>
</head>
<body>

<header>
    <h1>Zadanie P60 - dni tygodnia</h1>
    <h2>Autor: Jakub Pieniężny 3p</h2>
</header>


<section>

    <p>
       Napisz program, który dla podanej liczby całkowitej z przedziału od 1 do 7 wypisuje jaki to dzień tygodnia. Zakładamy, że 1 to poniedziałek. W przypadku liczby z poza zakresu należy wyświetlić informację o błędzie.
    </p>

    <form action="index.php" method="post">
        <p>Podaj liczbę całkowitą: </p><input type="number" name="dzien">
        <input type="submit" value="Wyślij">
    </form>

</section>

<section>
    <?php

    if(isset($_POST["dzien"])){
        $dzien = $_POST["dzien"];

        $wynik = "";
        switch($dzien){
            case 1:
                $wynik = "poniedziałek";
                break;
            case 2:
                $wynik = "wtorek";
                break;
            case 3:
                $wynik = "środa";
                break;
            case 4:
                $wynik = "czwartek";
                break;
            case 5:
                $wynik = "piątek";
                break;
            case 6:
                $wynik = "sobota";
                break;
            case 7:
                $wynik = "niedziela";
                break;
            default:
                $wynik = "Jest tylko 7 dni  w tygodniu";
                break;
        }


        echo "Podana liczba to: $dzien<br>";
        echo "Nazwa dnia tygodnia: <h3>$wynik</h3>";

    }

    ?>
</section>

</body>
</html>
