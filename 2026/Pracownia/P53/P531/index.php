<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>P531</title>
</head>
<body>
<section>
    <pre>
        Zapoznaj się z materiałem lekcji. Utwórz skrypt, który:

        Tworzy plik nazwisko_i_imie.txt
        Tworzy plik o nazwie: doSkasowania.txt.
        Kasuje plik doSkasowania.txt
        Tworzy folder o nazwie zgodnej z Twoim nazwiskiem.
        W tym folderze tworzy plik o nazwie nazwisko_i_imie.txt
    </pre>
</section>
<section>
    <?php
    touch('nazwisko_i_imie.txt');
    touch('doSkasowania.txt');
    unlink('doSkasowania.txt');
    $folder = "Pieniężny";
    $plik3 = $folder . "/nazwisko_i_imie.txt";

    if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
    }

    ?>
</section>

</body>
</html>


