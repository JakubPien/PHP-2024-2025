<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>T62</title>
</head>
<body>

<header>
    <h1>Zadanie T62</h1>
    <h2>Autor: Jakub Pieniężny 3p</h2>
</header>

<section>
    <p>
        Ćwiczenie 6.31 - ćwiczenie z podręcznika<br>
        Utwórz podobnie jak w ćwiczeniu 6.29 (z podręcznika) skrypt, który dane pobrane z formularza będzie dodawał w bazie
        3p_2_biblioteka (zaimportuj ją z pliku biblioteka.sql) do tabeli autorzy.
        W skrypcie zastosuj polecenia mysqli zorientowanego obiektowo.
    </p>

    <form action="index.php" method="post">
        <p id="wyb">Rejestracja autora:</p>
        <label>Imię:
            <input type="text" name="imie" size="30" required>
        </label>
        <label>Nazwisko:
            <input type="text" name="nazwisko" size="30" required>
        </label>
        <br><br>
        <input type="submit" value="Wyślij" name="wyslij">
        <input type="reset" value="Wyczyść" name="zeruj">
    </form>

    <?php
    if (isset($_POST["wyslij"])) {
        $conn = new mysqli('localhost', 'root', '', '3p_2_biblioteka');

        if ($conn->connect_error) {
            die("Błąd połączenia z serwerem MySQL: " . $conn->connect_error);
        }

        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];

        $stmt = $conn->prepare("INSERT INTO autorzy (imie, nazwisko) VALUES (?, ?)");
        $stmt->bind_param("ss", $imie, $nazwisko);

        if ($stmt->execute()) {
            echo "<p>Czytelnik $imie $nazwisko został dodany do bazy.</p>";
        } else {
            echo "<p>Błąd podczas dodawania czytelnika: " . $conn->error . "</p>";
        }

        $stmt->close();
        $conn->close();
    }
    ?>
</section>

</body>
</html>
