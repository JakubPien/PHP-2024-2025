<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>P58</title>
</head>
<body>

<header>
    <h1>Zadanie P58</h1>
    <h2>Autor: Jakub Pieniężny</h2>
</header>

<section>
    <p>PHP pobieranie danych za pomocą formularza


        Zapoznaj się z rozdziałem podręcznika. Opracuj własny formularz i skrypt pobierający dane. Do wykonania zadania użyj różne komponenty formularzy. Przykładowy wygląd formularza pokazany jest na załączonej grafice.</p>


    <fieldset name="Podstawowe dane:">
        <form action="index.php" method="post">
            Imię i nazwisko: <input type="text" name="name">
            E-mail: <input type="email" name="email">
            Telefon: <input type="number" name="tel">
            Moje buty są takie stare...
            <textarea name="" id="" cols="30" rows="10"></textarea>

        </form>
    </fieldset>

    <h2><b>Zaprojektuj własne trampki:</b></h2>

    <fieldset name="Własny projekt butów">
        <fieldset>
        <form action="index.php" method="post">
            <input type="radio" name="color" value="red" >czerwony
            <input type="radio" name="color" value="blue" checked>niebieski
            <input type="radio" name="color" value="black" >czarny
            <input type="radio" name="color" value="silver" >srebrny
        </form>
        </fieldset>
        <fieldset>
        <form action="index.php" method="post">
            <input type="checkbox" name="opcje[]" value="bl_sz">Błyszczące sznurówki
            <input type="checkbox" name="opcje[]" value="me_lo">Metalowe logo
            <input type="checkbox" name="opcje[]" value="sw_po">Świecąca podeszwa
            <input type="checkbox" name="opcje[]" value="od_mp">Odtwarzacz MP3
        </form>
            </fieldset>
        <fieldset>
        <form action="index.php" method="post">
            Rozmiar zgodny ze standardowymi numerami butów: <input type="">
        </form>
    </fieldset>
    </fieldset>
        <button type="submit">Podrasuj swoje buty!</button> <button type="reset">Resetuj</button>

</section>

</body>
</html>


