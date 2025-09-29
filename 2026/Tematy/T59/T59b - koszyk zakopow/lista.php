<?php
session_start();
?>
    <!DOCTYPE HTML>
    <html>
    <head>
        <title>Koszyk zakupów</title>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
    </head>
    <body>

    <header>
        <h1>Zadanie T59b - koszyk zakópów</h1>
        <h2>Autor: Jakub Pieniężny 3p</h2>
    </header>
    <div>
        <p>
        PHP - zastosowanie sesji - koszyk zakupowy


        Na podstawie przykładu w podręczniku wykonaj projekt strony symulującej zachowanie koszyka zakupowego w sklepie internetowym.
        </p>
        <br><br>
    </div>

    <p><b>Lista artykułów</b></p>
<?php
if (isset($_POST['lista'])) {
    if (!empty($_SESSION['koszyk'])) {
        $koszyk = array_unique(
            array_merge(
                unserialize($_SESSION['koszyk']),
                $_POST['lista']
            )
        );
        $_SESSION['koszyk'] = serialize($koszyk);
    } else {
        $_SESSION['koszyk'] = serialize($_POST['lista']);
    }
    echo "<h3>Wybne produkty zostały umieszczone w koszyku</h3>";
}
?>
    <form action="lista.php" method="post">
        <p>Wybór produktu:</p>
        <p>
            <select name="lista[]" multiple="multiple" size = "9">
                <option value="Monitor"> Monitor</option>
                <option value="Płyta główna"> Płyta główna</option>
                <option value="Wentylatory"> Wentylatory</option>
                <option value="Chłodzenie"> Chłodzenie</option>
                <option value="Zasilacz"> Zasilacz</option>
                <option value="Karta graficzna"> Karta graficzna</option>
                <option value="Dysk twardy"> Dysk twardy</option>
                <option value="Obudowa"> Obudowa</option>
                <option value="Procesor"> Procesor</option>
            </select></p>
        <p><b>Aby wybrać parę przedmiotów trzymaj klawisz CTRL podczas klikania myszką</b></p><p><input type="submit" value="Wyślij"></p>
    </form>
    <p><a href="koszyk.php">Przejdź do koszyka</a></p>
    </body>
</html>