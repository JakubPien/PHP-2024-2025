<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>P64</title>
</head>
<body>

<header>
    <h1>Zadanie P64 - Dni w miesiącu</h1>
    <h2>Autor: Jakub Pieniężny 3p</h2>
</header>


<section>

    <pre>
      Napisz program, który jak poprzednio, ale w przypadku lutego pyta dodatkowo o rok i dla lat przestępnych wyświetla 29 dni, a dla pozostałych 28.

    </pre>

    <form action="index.php" method="post">
        <p>Podaj numer miesiąca (1-12):</p><input type="number" name="miesiac" min="1" max="12" >
        <p>Podaj rok</p><input type="number" name="rok">
        <input type="submit" value="Wyślij">
    </form>

</section>

<section>
    <?php

    if(isset($_POST["miesiac"])) {
        $miesiac = $_POST["miesiac"];
        $rok = $_POST["rok"];
        $dni = 0;
        $mies = 0;
        if($miesiac == 2){
            $mies = 3;
        } else if($miesiac % 2 == 0){
            $mies = 1;
        } else {
            $mies = 2;
        }

        switch($mies){
            case 1:
                $dni = 31;
                break;
            case 2:
                $dni = 30;
                break;
            case 3:
                if ($rok % 4 == 0) {
                    $dni = 29;
                } else {
                    $dni = 28;
                }
        }


        echo "Miesiąc numer $miesiac ma $dni";

    }
    ?>
</section>

</body>
</html>
