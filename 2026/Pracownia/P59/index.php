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

    <pre>
        Napisz program, który dla podanego wyniku procentowego testów studenckich wystawia ocenę według następującej zasady:
5 - 90% do 100%
4,5 - 80% do 89%
4 - 70% do 79%
3,5 - 60% do 69%
3 - 50% do 59%
2 - poniżej 50%
    </pre>

    <form action="index.php" method="post">
        <p>Podaj wynik Studenta w (%) = </p><input type="number" name="procent">
        <input type="submit" value="Wyślij">
    </form>

</section>

<section>
    <?php

    if(isset($_POST["procent"])){
        $procent = $_POST["procent"];
        $proc = $procent / 10;
        $proc = floor($proc);
        if ($proc > 0 && $proc < 5)
            $proc = 11;

        $ocena = "";

        switch($proc){
            case 5:
                $ocena = "3";
                break;
            case 6:
                $ocena = "3.5";
                break;
            case 7:
                $ocena = "4";
                break;
            case 8:
                $ocena = "4.5";
                break;
            case 10:
            case 9:
                $ocena = "5";
                break;
            case 11:
                $ocena = "2";
                break;
            default:
                $ocena = "Chyba się troche pomyliłeś maks to 100%";
                break;
        }


        echo "Podana wartość procentowa to: $procent% <br>";
        echo "  Ocena studenta to: $ocena";

    }



    ?>
</section>

</body>
</html>
