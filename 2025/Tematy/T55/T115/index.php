
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>T115</title>
</head>
<body>

<header>
    <h1>Zadanie T115 </h1>
    <h2>Autor: Jakub Pieniężny 2p</h2>
    <link rel="stylesheet" href="style.css">
</header>

<section>
  <p>
      Napisz funkcję, która na podstawie danych pobranych z tablicy zwracanej przez funkcję getdate() wyświetli bieżącą datę. W dacie miesiąc ma być wyświetlony w postaci tekstu w języku polskim.
  </p>
</section>

<section>

    <?php
    function wyswietlDate() {
        $miesiace = array(
            1 => "stycznia",
            2 => "lutego",
            3 => "marca",
            4 => "kwietnia",
            5 => "maja",
            6 => "czerwca",
            7 => "lipca",
            8 => "sierpnia",
            9 => "września",
            10 => "października",
            11 => "listopada",
            12 => "grudnia"
        );

        $data = getdate();
        $dzien = $data['mday'];
        $miesiac = $data['mon'];
        $rok = $data['year'];

        echo "<p>Dzisiejsza data: $dzien " . $miesiace[$miesiac] . " $rok</p>";
    }

    wyswietlDate();
    ?>
</section>

</body>
</html>