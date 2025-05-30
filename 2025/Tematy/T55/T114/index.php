
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>T114</title>
</head>
<body>

<header>
    <h1>Zadanie T114</h1>
    <h2>Autor: Jakub Pieniężny 2p</h2>
    <link rel="stylesheet" href="style.css">
</header>

<section>
    <p>
      Napisz funkcję, która dla podanej daty w postaci mm, dd, YY sprawdzi, czy jest to prawidłowa data i jeśli tak sprawdzi, czy jest to data z przeszłości. Jeśli tak funkcja wypisze słowo „historia”, a jeśli nie wypisze „teraźniejszość lub przyszłość”. W przypadku błędnej danej funkcja kończy działanie i wyświetla komunikat o błędnej dacie.
    </p>
    <form method="post">
        <label for="mm">Miesiąc (mm):</label><br>
        <input type="number" id="mm" name="mm" min="1" max="12" required><br><br>

        <label for="dd">Dzień (dd):</label><br>
        <input type="number" id="dd" name="dd" min="1" max="31" required><br><br>

        <label for="yy">Rok (YY lub YYYY):</label><br>
        <input type="number" id="yy" name="yy" min="0" max="9999" required><br><br>

        <input type="submit" value="Sprawdź datę">
    </form>
</section>

<section>

    <?php
    function sprawdzDate($mm, $dd, $yy) {
        $m = intval($mm);
        $d = intval($dd);
        $y = intval($yy);

        if ($y < 100) {
            $y += 2000;
        }

        if (!checkdate($m, $d, $y)) {
            echo "<p style='color:red;'>Błędna data!</p>";
            return;
        }

        $data = DateTime::createFromFormat('Y-m-d', sprintf('%04d-%02d-%02d', $y, $m, $d));
        $dzisiaj = new DateTime('today');

        if ($data < $dzisiaj) {
            echo "<p>historia</p>";
        } else {
            echo "<p>teraźniejszość lub przyszłość</p>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        sprawdzDate($_POST["mm"], $_POST["dd"], $_POST["yy"]);
    }

    ?>
</section>

</body>
</html>