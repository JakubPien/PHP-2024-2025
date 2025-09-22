<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Zadanie P58</title>
</head>
<body>

<header>
    <h1>Zadanie P58</h1>
    <h2>Autor: Jakub Pieniężny 3P</h2>
</header>

<p>
<hr>
    PHP pobieranie danych za pomocą formularza


    Zapoznaj się z rozdziałem podręcznika. Opracuj własny formularz i skrypt pobierający dane. Do wykonania zadania użyj różne komponenty formularzy. Przykładowy wygląd formularza pokazany jest na załączonej grafice.
<hr>
</p>

<h1>Formularz konkursu „Podrasuj swoje buty!”</h1>
<p>
    Chcesz zamienić swoje stare trampki na nową parę zaprojektowanych przez siebie butów Forcefield?
    Napisz nam, dlaczego sądzisz, że powinieneś <i>pożegnać się</i> ze swoimi wysłużonymi butami,
    a być może zostaniesz jednym z laureatów konkursu!
</p>

<form method="post">
    <fieldset>
        <legend>Podstawowe dane</legend>
        Imię i nazwisko: <input type="text" name="imie"><br><br>
        E-mail: <input type="email" name="email"><br><br>
        Telephone: <input type="text" name="telefon"><br><br>
        Moje buty są TAKIE stare...<br>
        <textarea name="opis" rows="5" cols="60" maxlength="300" ></textarea>
    </fieldset>

    <fieldset>
        <legend>Zaprojektuj własne trampki:</legend>

        <fieldset>
            <legend>Kolor (<i>wybierz jeden</i>):</legend>
            <label><input type="radio" name="kolor" value="czerwony"> czerwony</label><br>
            <label><input type="radio" name="kolor" value="niebieski" checked> niebieski</label><br>
            <label><input type="radio" name="kolor" value="czarny"> czarny</label><br>
            <label><input type="radio" name="kolor" value="srebrny"> srebrny</label>
        </fieldset>

        <fieldset>
            <legend>Opcje (<i>możesz wybrać kilka</i>):</legend>
            <label><input type="checkbox" name="opcje[]" value="Błyszczące sznurówki"> Błyszczące sznurówki</label><br>
            <label><input type="checkbox" name="opcje[]" value="Metalowe logo" checked> Metalowe logo</label><br>
            <label><input type="checkbox" name="opcje[]" value="Świecące podeszwy" checked> Świecące podeszwy</label><br>
            <label><input type="checkbox" name="opcje[]" value="Odtwarzanie MP3"> Odtwarzanie MP3</label>
        </fieldset>

        <fieldset>
            <legend>Rozmiar</legend>
            Rozmiar zgodny ze standardowymi numerami butów:
            <select name="rozmiar">
                <?php
                for ($i = 35; $i <= 50; $i++) {
                    echo "<option value=\"$i\">$i</option>";
                }
                ?>
            </select>
        </fieldset>
    </fieldset>

    <input type="submit" value="Podrasuj swoje buty!">
    <input type="reset" value="Resetuj">
</form>

<?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
    <section>
        <h2>Twoje zgłoszenie:</h2>
        <p><strong>Imię i nazwisko:</strong> <?= htmlspecialchars($_POST["imie"]) ?></p>
        <p><strong>E-mail:</strong> <?= htmlspecialchars($_POST["email"]) ?></p>
        <p><strong>Telefon:</strong> <?= htmlspecialchars($_POST["telefon"]) ?></p>
        <p><strong>Opis butów:</strong><br> <?= nl2br(htmlspecialchars($_POST["opis"])) ?></p>
        <p><strong>Kolor:</strong> <?= htmlspecialchars($_POST["kolor"] ?? "nie wybrano") ?></p>
        <p><strong>Opcje:</strong>
            <?php
            if (!empty($_POST["opcje"])) {
                echo implode(", ", array_map("htmlspecialchars", $_POST["opcje"]));
            } else {
                echo "brak";
            }
            ?>
        </p>
        <p><strong>Rozmiar:</strong> <?= htmlspecialchars($_POST["rozmiar"]) ?></p>
    </section>
<?php endif; ?>
</body>
</html>
