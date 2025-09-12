<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>T56</title>
</head>
<body>

<header>
    <h3>Zadanie T56</h3>
    <h2>Autor: Jakub Pieniężny</h2>
</header>

<section>
    <p>Utwórz skrypt, który będzie zapisywał opinie użytkowników w pliku tekstowym opinie.txt. Na stronie wyświetl formularz, który pozwoli na wpisanie opinii. Nowe opinie powinny być dopisywane do pliku i umieszczane na jego końcu. Dotychczasowe opinie zapisane w pliku tekstowym powinny zostać wyświetlone na stronie i powinny być dostępne dla innych jej użytkowników.</p>


<?php
if (isset($_POST['komentarz'])) {
    $tekst = substr($_POST['komentarz'], 0, 255);
    $tekst = strip_tags($tekst) . "\n";

    if (!$op = fopen('opinie.txt', 'a')) {
        echo "Błąd!. Nie można otworzyć pliku opinie.txt";
    } else {
        if (fwrite($op, $tekst) === false) {
echo "Dodanie komentarza nie powiodło się";
        }
    }
}
?>

<div>
<form action="index.php" method="post">
    <br>
<p><b>Dodaj swój komentarz na temat globalnego ocieplenia</b>(Maksymalnie 255 znaków)</p>
<textarea name="komentarz" rows="10" cols="100"
wrap="virtual"></textarea><br>
<input type="submit" value="Wyślij">
</div>
</form>

</section>
    <section>
        <b>Dodane opinie:</b>
    <?php
$opinie = '';
if (file_exists('./opinie.txt')) {
$opinie =file_get_contents('./opinie.txt');
 $opinie = nl2br($opinie);
}
    if ($opinie != '') {
        echo $opinie;
    } else {
        echo "Brak opinii na temat zmian klimatu.";
    }
    ?>

</section>


</body>
</html>


